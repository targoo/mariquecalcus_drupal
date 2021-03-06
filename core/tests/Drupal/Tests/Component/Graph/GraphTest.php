<?php

/**
 * @file
 * Contains \Drupal\Tests\Component\Graph\GraphTest.
 */

namespace Drupal\Tests\Component\Graph;

use Drupal\Component\Graph\Graph;
use Drupal\Tests\UnitTestCase;

/**
 * Unit tests for the graph handling features.
 *
 * @see \Drupal\Component\Graph\Graph
 * @group Graph
 */
class GraphTest extends UnitTestCase {

  public static function getInfo() {
    return array(
      'name' => 'Directed acyclic graph manipulation',
      'description' => 'Depth first search and sort unit tests.',
      'group' => 'Graph',
    );
  }

  /**
   * Test depth-first-search features.
   */
  public function testDepthFirstSearch() {
    // The sample graph used is:
    // 1 --> 2 --> 3     5 ---> 6
    //       |     ^     ^
    //       |     |     |
    //       |     |     |
    //       +---> 4 <-- 7      8 ---> 9
    $graph = $this->normalizeGraph(array(
      1 => array(2),
      2 => array(3, 4),
      3 => array(),
      4 => array(3),
      5 => array(6),
      7 => array(4, 5),
      8 => array(9),
      9 => array(),
    ));
    $graph_object = new Graph($graph);
    $graph = $graph_object->searchAndSort();

    $expected_paths = array(
      1 => array(2, 3, 4),
      2 => array(3, 4),
      3 => array(),
      4 => array(3),
      5 => array(6),
      7 => array(4, 3, 5, 6),
      8 => array(9),
      9 => array(),
    );
    $this->assertPaths($graph, $expected_paths);

    $expected_reverse_paths = array(
      1 => array(),
      2 => array(1),
      3 => array(2, 1, 4, 7),
      4 => array(2, 1, 7),
      5 => array(7),
      7 => array(),
      8 => array(),
      9 => array(8),
    );
    $this->assertReversePaths($graph, $expected_reverse_paths);

    // Assert that DFS didn't created "missing" vertexes automatically.
    $this->assertFalse(isset($graph[6]), 'Vertex 6 has not been created');

    $expected_components = array(
      array(1, 2, 3, 4, 5, 7),
      array(8, 9),
    );
    $this->assertComponents($graph, $expected_components);

    $expected_weights = array(
      array(1, 2, 3),
      array(2, 4, 3),
      array(7, 4, 3),
      array(7, 5),
      array(8, 9),
    );
    $this->assertWeights($graph, $expected_weights);
  }

  /**
   * Normalizes a graph.
   *
   * @param $graph
   *   A graph array processed by \Drupal\Component\Graph\Graph::searchAndSort()
   *
   * @return array
   *   The normalized version of a graph.
   */
  protected function normalizeGraph($graph) {
    $normalized_graph = array();
    foreach ($graph as $vertex => $edges) {
      // Create vertex even if it hasn't any edges.
      $normalized_graph[$vertex] = array();
      foreach ($edges as $edge) {
        $normalized_graph[$vertex]['edges'][$edge] = TRUE;
      }
    }
    return $normalized_graph;
  }

  /**
   * Verify expected paths in a graph.
   *
   * @param $graph
   *   A graph array processed by \Drupal\Component\Graph\Graph::searchAndSort()
   * @param $expected_paths
   *   An associative array containing vertices with their expected paths.
   */
  protected function assertPaths($graph, $expected_paths) {
    foreach ($expected_paths as $vertex => $paths) {
      // Build an array with keys = $paths and values = TRUE.
      $expected = array_fill_keys($paths, TRUE);
      $result = isset($graph[$vertex]['paths']) ? $graph[$vertex]['paths'] : array();
      $this->assertEquals($expected, $result, sprintf('Expected paths for vertex %s: %s, got %s', $vertex, $this->displayArray($expected, TRUE), $this->displayArray($result, TRUE)));
    }
  }

  /**
   * Verify expected reverse paths in a graph.
   *
   * @param $graph
   *   A graph array processed by \Drupal\Component\Graph\Graph::searchAndSort()
   * @param $expected_reverse_paths
   *   An associative array containing vertices with their expected reverse
   *   paths.
   */
  protected function assertReversePaths($graph, $expected_reverse_paths) {
    foreach ($expected_reverse_paths as $vertex => $paths) {
      // Build an array with keys = $paths and values = TRUE.
      $expected = array_fill_keys($paths, TRUE);
      $result = isset($graph[$vertex]['reverse_paths']) ? $graph[$vertex]['reverse_paths'] : array();
      $this->assertEquals($expected, $result, sprintf('Expected reverse paths for vertex %s: %s, got %s', $vertex, $this->displayArray($expected, TRUE), $this->displayArray($result, TRUE)));
    }
  }

  /**
   * Verify expected components in a graph.
   *
   * @param $graph
   *   A graph array processed by \Drupal\Component\Graph\Graph::searchAndSort().
   * @param $expected_components
   *   An array containing of components defined as a list of their vertices.
   */
  protected function assertComponents($graph, $expected_components) {
    $unassigned_vertices = array_fill_keys(array_keys($graph), TRUE);
    foreach ($expected_components as $component) {
      $result_components = array();
      foreach ($component as $vertex) {
        $result_components[] = $graph[$vertex]['component'];
        unset($unassigned_vertices[$vertex]);
      }
      $this->assertEquals(1, count(array_unique($result_components)), sprintf('Expected one unique component for vertices %s, got %s', $this->displayArray($component), $this->displayArray($result_components)));
    }
    $this->assertEquals(array(), $unassigned_vertices, sprintf('Vertices not assigned to a component: %s', $this->displayArray($unassigned_vertices, TRUE)));
  }

  /**
   * Verify expected order in a graph.
   *
   * @param $graph
   *   A graph array processed by \Drupal\Component\Graph\Graph::searchAndSort()
   * @param $expected_orders
   *   An array containing lists of vertices in their expected order.
   */
  protected function assertWeights($graph, $expected_orders) {
    foreach ($expected_orders as $order) {
      $previous_vertex = array_shift($order);
      foreach ($order as $vertex) {
        $this->assertTrue($graph[$previous_vertex]['weight'] < $graph[$vertex]['weight'], sprintf('Weights of %s and %s are correct relative to each other', $previous_vertex, $vertex));
      }
    }
  }

  /**
   * Helper function to output vertices as comma-separated list.
   *
   * @param $paths
   *   An array containing a list of vertices.
   * @param $keys
   *   (optional) Whether to output the keys of $paths instead of the values.
   */
  protected function displayArray($paths, $keys = FALSE) {
    if (!empty($paths)) {
      return implode(', ', $keys ? array_keys($paths) : $paths);
    }
    else {
      return '(empty)';
    }
  }

}
