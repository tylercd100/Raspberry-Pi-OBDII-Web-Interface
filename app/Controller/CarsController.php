<?php
class CarsController extends AppController {

    public $uses = array('Car');
    public $components = array('RequestHandler');

    public function index() {
        $cars = $this->Car->find('all');
        $this->set(array(
            'cars' => $cars,
            '_serialize' => array('cars')
        ));
    }

    public function view($id) {
        $car = $this->Car->findById($id);
        $this->set(array(
            'car' => $car,
            '_serialize' => array('car')
        ));
    }

    public function edit($id) {
        $this->Car->id = $id;
        if ($this->Car->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function delete($id) {
        if ($this->Car->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}