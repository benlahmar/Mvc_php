<?php

class ItemController extends Controller {
   public function display() {
      $slug = $this->route["params"]["slug"];
      $this->view->item = Item::getFromSlug($slug);
     $this->view->abc="bonjour";
      $this->view->display();
   }

}
