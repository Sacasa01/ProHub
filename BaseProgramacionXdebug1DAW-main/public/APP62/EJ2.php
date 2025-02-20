<?php
class Factura
{
    public $numeroFactura;
    public $cliente;
    public $monto;

    public function __construct($numeroFactura, $cliente, $monto)
    {
        $this->numeroFactura = $numeroFactura;
        $this->cliente = $cliente;
        $this->monto = $monto;
    }

    public function mostrarDetalles()
    {
        echo "Número de factura: " . $this->numeroFactura . "<br>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Monto: " . number_format($this->monto, 2) ."€" . "<br>"; // el dos son los decimales que queremos es decir "24,82"
    }
}

class FacturaElectronica extends Factura
{
    public $emailCliente;

    public function __construct($numeroFactura, $cliente, $monto, $emailCliente)
    {
        parent::__construct($numeroFactura, $cliente, $monto);
        $this->emailCliente = $emailCliente;
    }

    public function enviarEmail()
    {
        echo "Enviando email a: " . $this->emailCliente . "<br>";
    }
}

$factura = new FacturaElectronica(1, "Manolito Pérez", 2600, "manolito@email.com");

$factura->mostrarDetalles();
$factura->enviarEmail();

