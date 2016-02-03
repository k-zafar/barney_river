<?php
/**
 * @file
 * Contains \Drupal\barney_river_utilities\Plugin\Block\TeamMemberBlock.
 */
namespace Drupal\barney_river_utilities\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Provides a 'Team Member' Block
 *
 * @Block(
 *   id = "showteammembers",
 *   admin_label = @Translation("Show Team Members"),
 * )
 */


class TeamMemberBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {

    $query = \Drupal::entityQuery('node')
        ->condition('status', 1)
        ->condition('type', 'team_member')
        ->sort('field_order', 'ASC');
    $nids = $query->execute(); 
    $nodes = entity_load_multiple('node', $nids);
    $ind = 1;
    $output = '<div class="tabbable tabs-left">
                <ul class="nav nav-tabs">';
    foreach($nodes as $node){
              $class = ($ind==1) ? 'active' : '';

              $output .= '<li class="' . $class . '"><a href="#team_member_tab' . $ind . '" data-toggle="tab">'.$node->title->value.'</a><br>'.$node->get('field_designation')->value.'</li>'; 
              $ind++;
    }
    $ind = 1;
            $output .= '</ul> 
            <div class="tab-content">';
             foreach($nodes as $node){
                $class = ($ind==1) ? 'active' : '';
				$tokens = explode('/', $node->field_image->entity->url());				
				$image_name=$tokens[sizeof($tokens)-1];
				$dir=$tokens[sizeof($tokens)-2];
				$temp_string=$dir.'/'.$image_name; 
				$image_url=str_replace($temp_string,'',$node->field_image->entity->url());
				$image_url=$image_url.'styles/person_picture_204_236_/public/'.$temp_string; 
				$output .= '<div class="tab-pane ' . $class . '" id="team_member_tab' . $ind . '"><img src="'.$image_url.'" alt="some_text">'.$node->get('body')->value.'   </div>';
                $ind++;
            }
            $output .= '</div>
          </div>';

        return array(
          '#type' => 'markup',
          '#markup' => $output,
        );
      }
}
?>





