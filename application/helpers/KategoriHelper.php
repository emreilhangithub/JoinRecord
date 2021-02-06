<?php 

$ekranabas = [
     [
         'id' => 1,
         'parent' => 0,
         'name' => 'PHP'
     ],
     [
         'id' => 2,
         'parent' => 0,
         'name' => 'CSS'
     ],
     [
         'id' => 3,
         'parent' => 0,
         'name' => 'HTML'
     ],
     [
         'id' => 4,
         'parent' => 1,
         'name' => 'PHP Fonksiyonlar'
     ],
     [
         'id' => 5,
         'parent' => 1,
         'name' => 'PHP Değişkenler'
     ],
     [
         'id' => 6,
         'parent' => 4,
         'name' => 'Recursive Fonksiyonlar'
     ],
     [
         'id' => 7,
         'parent' => 4,
         'name' => 'Anonim Fonksiyonlar'
     ],
     [
         'id' => 8,
         'parent' => 6,
         'name' => 'Recursive'
     ],
      [
         'id' => 9,
         'parent' => 8,
         'name' => 'Anonim Fonksiyonlar'
     ],
 ];

function  get_categoryList($categories, $parent = 0)
{
	$CI = &get_instance(); 
	$CI->db
	  $html = '';
     $html .= '<ul>';
     foreach ($categories as $category){
         if ($category['parent'] == $parent){
             $html .= '<li>' . $category['name'];
                 $html .= categoryList($categories, $category['id']);
             $html .= '</li>';
         }
     }
     $html .= '</ul>';
     return $html;
}

 echo  get_categoryList($ekranabas);






?>