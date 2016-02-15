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
    $nodes = node_load_multiple($nids);
    //$nodes = entity_load_multiple('node', $nids);
    $ind = 1;
    $output = '<div class="tabbable tabs-left">
                <ul class="nav nav-tabs">';
    foreach($nodes as $node){
              $class = ($ind==1) ? 'active' : '';

              $output .= '<li class="' . $class . '"><a href="#team_member_tab' . $ind . '" data-toggle="tab">' . $node->title->value . '<span>' . $node->get('field_designation')->value . '</span></a></li>';
              $ind++;
    }
    $ind = 1;
            $output .= '</ul>
            <div class="tab-content">';
             foreach($nodes as $node){
                $class = ($ind==1) ? 'active' : '';
                $path = $node->field_image->entity->getFileUri();
                $url = ImageStyle::load('person_picture')->buildUrl($path);
                $output .= '<div class="tab-pane ' . $class . '" id="team_member_tab' . $ind . '"><div class="col-md-3"><img src="' . $url . '" alt=""></div><div class="col-md-9">' . $node->get('body')->value . '</div></div>';
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
