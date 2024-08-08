<?php

namespace Drupal\slider\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\file\Entity\File;

/**
 * Provides a 'Custom Slider' Block.
 *
 * @Block(
 *   id = "custom_slider",
 *   admin_label = @Translation("Custom Slider"),
 *   category = @Translation("Custom")
 * )
 */

class  Slider extends BlockBase
{
    /**
     * {@inheritdoc}
     *
     */

    public function build()
    {
        $data = [];
        $query = \Drupal::entityQuery('node');
        $query =  $query->condition('status', 1);
        $query = $query->condition('type', 'news');
        $entity_ids = $query->execute();


        $nodes = \Drupal\node\Entity\Node::loadMultiple($entity_ids);

        foreach ($nodes as $key => $node) {
            $data[$key]['title'] = $node->get('title')->getValue()[0]['value'];
            $data[$key]['category'] = $node->get('field_category')->getValue()[0]['target_id'];
            $data[$key]['date'] = $node->get('field_incident_date')->getValue()[0];

            // cover-image
            if ($node && $node->hasField('field_cover_image') && !$node->get('field_cover_image')->isEmpty()) {
                $cover_image = $node->get('field_cover_image')->first();
                $file = $cover_image->entity;

                if ($file instanceof File) {
                    $file_uri = $file->getFileUri();
                    $file_url = \Drupal::service('file_url_generator')->generateAbsoluteString($file_uri);
                    $data[$key]['cover_image'] = $file_url;
                }
            } else {
                $data[$key]['cover_image'] = ''; // Or handle the absence of the image field as needed.
            }

            // sub image 1
            if ($node && $node->hasField('field_sub_image_1') && !$node->get('field_sub_image_1')->isEmpty()) {
                $sub_image_1 = $node->get('field_sub_image_1')->first();
                $file = $sub_image_1->entity;

                if ($file instanceof File) {
                    $file_uri = $file->getFileUri();
                    $file_url = \Drupal::service('file_url_generator')->generateAbsoluteString($file_uri);
                    $data[$key]['sub_image_1'] = $file_url;
                }
            } else {
                $data[$key]['sub_image_1'] = ''; // Or handle the absence of the image field as needed.
            }

            // sub image 2
            if ($node && $node->hasField('field_sub_image_2') && !$node->get('field_sub_image_2')->isEmpty()) {
                $sub_image_2 = $node->get('field_sub_image_2')->first();
                $file = $sub_image_2->entity;

                if ($file instanceof File) {
                    $file_uri = $file->getFileUri();
                    $file_url = \Drupal::service('file_url_generator')->generateAbsoluteString($file_uri);
                    $data[$key]['sub_image_2'] = $file_url;
                }
            } else {
                $data[$key]['sub_image_2'] = ''; // Or handle the absence of the image field as needed.
            }

            // sub image 3
            if ($node && $node->hasField('field_sub_image_3') && !$node->get('field_sub_image_3')->isEmpty()) {
                $sub_image_3 = $node->get('field_sub_image_3')->first();
                $file = $sub_image_3->entity;

                if ($file instanceof File) {
                    $file_uri = $file->getFileUri();
                    $file_url = \Drupal::service('file_url_generator')->generateAbsoluteString($file_uri);
                    $data[$key]['sub_image_3'] = $file_url;
                }
            } else {
                $data[$key]['sub_image_3'] = ''; // Or handle the absence of the image field as needed.
            }

            // sub image 4
            if ($node && $node->hasField('field_sub_image_4') && !$node->get('field_sub_image_4')->isEmpty()) {
                $sub_image_4 = $node->get('field_sub_image_4')->first();
                $file = $sub_image_4->entity;

                if ($file instanceof File) {
                    $file_uri = $file->getFileUri();
                    $file_url = \Drupal::service('file_url_generator')->generateAbsoluteString($file_uri);
                    $data[$key]['sub_image_4'] = $file_url;
                }
            } else {
                $data[$key]['sub_image_4'] = ''; // Or handle the absence of the image field as needed.
            }
        }

        return [
            '#theme' => 'slider',
            '#data' => $data,
        ];
    }
}
