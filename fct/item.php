<?php

function displayItem($key,$item){

    $editItemId = get('editItem');
    if($editItemId===$key){
      $html = '<form action="editItem.php" method="POST">';
      $html .= '<input type="hidden" name="editItem" value="' . $key . '">';
      $html .= '<div class="input-group input-group-sm">';
      $html .= '<input type="text" class="form-control" name="intitule" value="' . $item['intitule'] . '">';
      $html .= '<span class="input-group-append">';
      $html .= '<button type="submit" class="btn btn-info btn-flat">OK</button>';
      $html .= '</span>';
      $html .= '</div>';
      $html .= '</form>';
      
    }else{
    $html= '
        <li class="'. ($item ['checked'] ? 'done':'').'">
                          
             <!-- checkbox -->
             <div class="icheck-primary d-inline ml-2">
             <a href="toggleItem.php?item='.$key.'">';
        if($item['checked']){
             $html.='  <i class="far fa-check-square"></i>';
            }else{
              $html.=' <i class="far fa-square"></i>';
            }
    $html.='
              </a></div>
             <!-- todo text -->
             <span class="text">'.
             $item['intitule']
             .'</span>
             <!-- Emphasis label -->
             <!-- General tools such as edit or delete-->
             <div class="tools">
               <a href="index.php?editItem='.$key.'">
                  <i class="fas fa-edit"></i>
               </a>
               <a href="deleteItem.php?item='.$key.'">
                  <i class="fas fa-trash"></i>
              </a>
             </div>
        </li>';
      }
        return $html;
    }

function getItems(){
        return unserialize(file_get_contents(FILE_NAME)) ;
    }
function saveItems($items){
  file_put_contents(FILE_NAME,serialize($items));
}
?>