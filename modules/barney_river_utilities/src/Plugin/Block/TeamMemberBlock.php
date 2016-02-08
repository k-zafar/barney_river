<?php
/**
 * @file
 * Contains \Drupal\barney_river_utilities\Plugin\Block\TeamMemberBlock.
 */
namespace Drupal\barney_river_utilities\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\image\Entity\ImageStyle;

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
                $path = $node->field_image->entity->getFileUri();
                $image_url = ImageStyle::load('thumbnail')->buildUrl($path);
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
