<?php
/**
 * @file
 * Contains \Drupal\barney_river_utilities\Plugin\Block\HomepageSlideshowBlock.
 */
namespace Drupal\barney_river_utilities\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\image\Entity\ImageStyle;



/**
 * Provides a 'Homepage Slideshow' Block
 *
 * @Block(
 *   id = "homepageslideshow",
 *   admin_label = @Translation("Homepage Slideshow"),
 * )
 */


class HomepageSlideshowBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {

    $query = \Drupal::entityQuery('node')
        ->condition('status', 1)
        ->condition('type', 'slideshow_slide')
        ->sort('field_order', 'ASC');
    $nids = $query->execute();
    $nodes = node_load_multiple($nids);

    $ind = 0;
    $output_slide_add_logo = $output_slide = $output_slide_bullet = $output = '';
    $logo=theme_get_setting('logo', 'zircon');
    foreach($nodes as $node){
        $output_slide_add_logo="";
        $class = ($ind==0) ? 'active' : '';
        $output_slide_bullet .= '<li data-target="#myCarousel" data-slide-to="' . $ind . '" class="' . $class . '"></li>';
        $path = $node->field_image->entity->url();
        if($node->get('field_add_logo')->value == 1){
            $output_slide_add_logo = '<div class="logo_on_slider">
                                   <img src="themes/zircon/images/logo-white.png" alt="Logo">
                                      </div>';
        }
        $output_slide .= '<div class="item ' . $class . '">

                           <img src="' . $path . '" alt="">
'. $output_slide_add_logo.'
                          </div>';

        $ind++;
    }
    $output_slide_bullet_wrap = ($ind == 1) ? '<ol class="carousel-indicators">' . $output_slide_bullet . '</ol>' : '';
    $output = '<div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                  ' . $output_slide_bullet_wrap . '

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  ' . $output_slide . '
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>';

        return array(
          '#type' => 'markup',
          '#markup' => $output,
        );
      }
}
?>
