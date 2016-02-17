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
                if(is_object($node->field_image->entity)){
                  $path = $node->field_image->entity->getFileUri();
                  $url = ImageStyle::load('person_picture')->buildUrl($path);
                  $tab_content_html = '<div class="col-md-3"><img src="' . $url . '" alt=""></div><div class="col-md-9">' . $node->get('body')->value . '</div>';
                }else{
                  $tab_content_html = '<div>' . $node->get('body')->value . '</div>';
                }
                $output .= '<div class="tab-pane ' . $class . '" id="team_member_tab' . $ind . '"> ' . $tab_content_html . ' </div>';
                $ind++;
            }
            $output .= '</div>
          </div>';

          $output_temp = '<div class="tabcordion">
  <ul class="nav nav-tabs">
    <li class="active"><a data-target=".home">Home</a></li>
    <li><a data-target=".profile">Profile</a></li>
    <li><a data-target=".messages">Messages</a></li>
    <li><a data-target=".settings">Settings</a></li>
  </ul>
  <div class="tab-content">
    <div class="home active in">
      <h3>Home</h3>
      <p>Rhoncus magna nec enim, et proin aliquet mid, porta magnis.</p>
    </div>
    <div class="profile">
      <h3>Profile</h3>
      <p>Odio mattis, non ut! Porttitor nunc phasellus cras elementum.</p>
    </div>
    <div class="messages">
      <h3>Messages</h3>
      <p>Enim hac tristique elementum, nec rhoncus porttitor sagittis cum.</p>
    </div>
    <div class="settings">
      <h4>Settings</h4>
      <p>Arcu auctor, porttitor tincidunt, aliquam ut ut, placerat porta pulvinar dictumst?</p>
    </div>
  </div>
</div>';

        return array(
          '#type' => 'markup',
          '#markup' => $output,
          '#attached' => array(
              'library' =>  array(
                 'barney_river_utilities/tabcordion',
                 'barney_river_utilities/tabcordion_hook',
              ),
            ),
        );
      }
}
?>
