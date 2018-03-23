<?php

class MapController extends Controller
{
  public function display()
  {
    (new MapHubView())->render();
  }
  public function seniorlot()
  {
    (new SeniorLotView())->render();
  }
}
