<?php
namespace PayumDoctrineORMModule\Entity;

use Doctrine\ORM\Mapping as ORM;

use Payum\Paypal\ExpressCheckout\Nvp\Model\PaymentDetails as BasePaymentDetails;

class PaymentDetails extends BasePaymentDetails
{
    /**
     * @var mixed
     */
    protected $id;
    protected $orderId;
    protected $useraction;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of orderId.
     *
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets the value of orderId.
     *
     * @param mixed $orderId the order id
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of useraction.
     *
     * @return mixed
     */
    public function getUseraction()
    {
        return $this->useraction;
    }

    /**
     * Sets the value of useraction.
     *
     * @param mixed $useraction the useraction
     *
     * @return self
     */
    public function setUseraction($useraction)
    {
        $this->useraction = $useraction;

        return $this;
    }
}