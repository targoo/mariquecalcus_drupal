<?php

/**
 * @file
 * Contains \Drupal\Tests\Core\EventSubscriber\PathRootsSubscriberTest.
 */

namespace Drupal\Tests\Core\EventSubscriber;

use Drupal\Core\EventSubscriber\PathRootsSubscriber;
use Drupal\Core\Routing\RouteBuildEvent;
use Drupal\Tests\UnitTestCase;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * Tests Drupal\Core\EventSubscriber\PathRootsSubscriber.
 *
 * @group Drupal
 * @group Routing
 *
 * @coversDefaultClass \Drupal\Core\EventSubscriber\PathRootsSubscriber
 */
class PathRootsSubscriberTest extends UnitTestCase {

  /**
   * The mocked state.
   *
   * @var \Drupal\Core\State\StateInterface|\PHPUnit_Framework_MockObject_MockObject
   */
  protected $state;

  /**
   * The tested path root subscriber.
   *
   * @var \Drupal\Core\EventSubscriber\PathRootsSubscriber
   */
  protected $pathRootsSubscriber;

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => 'Drupal\Core\EventSubscriber\PathRootsSubscriber',
      'description' => '',
      'group' => 'Routing'
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    $this->state = $this->getMock('Drupal\Core\State\StateInterface');
    $this->pathRootsSubscriber = new PathRootsSubscriber($this->state);
  }

  /**
   * Tests altering and finished event.
   *
   * @covers ::onRouteAlter()
   * @covers ::onRouteFinished()
   */
  public function testSubscribing() {
    $route_collection = new RouteCollection();
    $route_collection->add('test_route1', new Route('/test/bar'));
    $route_collection->add('test_route2', new Route('/test/baz'));
    $route_collection->add('test_route3', new Route('/test2/bar/baz'));

    $event = new RouteBuildEvent($route_collection, 'provider');
    $this->pathRootsSubscriber->onRouteAlter($event);

    $route_collection = new RouteCollection();
    $route_collection->add('test_route4', new Route('/test1/bar'));
    $route_collection->add('test_route5', new Route('/test2/baz'));
    $route_collection->add('test_route6', new Route('/test2/bar/baz'));

    $event = new RouteBuildEvent($route_collection, 'provider');
    $this->pathRootsSubscriber->onRouteAlter($event);

    $this->state->expects($this->once())
      ->method('set')
      ->with('router.path_roots', array('test', 'test2', 'test1'));

    $this->pathRootsSubscriber->onRouteFinished();
  }

}
