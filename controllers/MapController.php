<?php

class MapController extends Controller
{
  public function display()
  {
    (new MapHubView())->render();
  }
  public function seniorlot()
  {
    (new MapView())->render();
  }
  public function softmorelot()
  {
    (new MapView())->render();
  }
  public function paclot()
  {
    (new MapView())->render();
  }
  public function athleticlot()
  {
    (new MapView())->render();
  }
}
