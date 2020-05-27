<?php

namespace Drupal\custom\Controller;

class NewsController {

  public function stories( $type ) {
    $output = get_hacker_stories($type);
    //db_drop_table('new_stories_comments');
    //echo '<pre>'; print_r($output); die();
    for($i=8;$i<15;$i++){
      get_comments($output[$i]->story_id,$output[$i]->story_id);
    }
    return array(
      '#theme' => 'stories',
      '#items' => $output,
      '#title' => 'Our '.str_replace("_"," ",$type)
    );
  }

  public function comments( $id ) {
    $story_details = get_story_details($id);
    $output =  get_nested_comments($id);
    return array(
      '#theme' => 'comments_list',
      '#items' => (array)$output,
      '#story_data' => (array)$story_details
    );
  }

  public function homepage() {
    $output = array(
      'top_stories' => array_slice(get_hacker_stories('top_stories'), 0, 5, true),
      'new_stories' => array_slice(get_hacker_stories('new_stories'), 0, 5, true),
      'best_stories' => array_slice(get_hacker_stories('best_stories'), 0, 5, true),
    );
    return array(
      '#theme' => 'homepage',
      '#top' => $output['top_stories'],
      '#new' => $output['new_stories'],
      '#best' => $output['best_stories']
    );
  }

  public function author( $name ) {
   $output =  get_author_details($name);
   $arr= array(
     array(
     'created' => $output->created,
     'id' => $output->id,
     'karma' => $output->karma,
     'story_count' => count(get_author_stories($name)),
     'comment_count' => count(get_author_comments($name))
     )
    );

   return array(
    '#theme' => 'author',
    '#items' => $arr,
   );
  }

  public function authorStories( $name ) {
  $output= get_author_stories($name);
    
    return array(
     '#theme' => 'stories',
     '#items' => $output,
     '#name' => $name
    );
   }

   public function authorComments( $name ) {
    $output= get_author_comments($name);
    
      return array(
       '#theme' => 'comments_list',
       '#items' => $output,
       '#name' => $name
      );
     }
}
