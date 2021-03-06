<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Response;

class ApiResponse
{

    private $_success = "";

    private $_message = "";

    private $_data = "";

    private $_code = "";

    private $_totalAmount = "";

    public function __get($property)
    {
        return (isset($this->{'_' . $property}) ? $this->{'_' . $property} : null);
    }

    public function __set($property, $value)
    {
        if (isset($this->{'_' . $property})) {
            $this->{'_' . $property} = $value;
        }
    }

    public function __isset($property)
    {
        return isset($this->{'_' . $property});
    }

    public function doResponse()
    {
        if (isset($this->_data) && ! empty($this->_data)) {

            return Response::json(array(
                'success' => $this->_success,
                'message' => $this->_message,
                'data' => $this->_data
            ), 200);
        } else {

            return Response::json(array(
                'success' => $this->_success,
                'message' => $this->_message,
                'code' => $this->_code
            ), 200);
        }
    }

    /**
     * Method for custom response for partner's api
     */
    public function doCustomResponse()
    {
        if (isset($this->_data) && ! empty($this->_data)) {

            return Response::json(array(
                'success' => $this->_success,
                'message' => $this->_message,
                'totalAmount' => $this->_totalAmount,
                'data' => $this->_data
            ), 200);
        } else {

            return Response::json(array(
                'success' => $this->_success,
                'message' => $this->_message,
                'code' => $this->_code
            ), 200);
        }
    }

    public function doError($message)
    {
        $this->success = false;
        $this->message = $message;
        return $this->doResponse();
    }
}
?>
