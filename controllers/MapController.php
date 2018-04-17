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
  public function sophomorelot()
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
  public function addRow()
  {
    (new MapDatabaseModel())->addRowToDB($_POST['x'],$_POST['y'],$_POST['width'],$_POST['height'],$_POST['spot_num'],$_POST['num_of_spots'],$_POST['spacing']);
  }
}
