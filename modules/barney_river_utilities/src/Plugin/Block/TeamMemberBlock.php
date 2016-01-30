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

              $output .= '<li class="' . $class . '"><a href="#' . $ind . '" data-toggle="tab">'.$node->title->value.'<span>'.$node->get('field_designation')->value.'</span></a></li>'; 
              $ind++;
    }
    $ind = 1;
            $output .= '</ul>
            <div class="tab-content">';
             foreach($nodes as $node){
                $class = ($ind==1) ? 'active' : '';
                $output .= '<div class="tab-pane ' . $class . '" id="' . $ind . '"><img src="'.$node->field_image->entity->url().'" alt="some_text">'.$node->get('body')->value.'   </div>';
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
