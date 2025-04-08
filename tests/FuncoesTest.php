<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    // Teste para é Par
    public function testEhParComNumeroPar()
    {
        $this->assertTrue(Funcoes::ehPar(10));
    }

    public function testEhParComNumeroImpar()
    {
        $this->assertFalse(Funcoes::ehPar(7));
    }

    // Teste para fatorial
    public function testFatorialComNumeroPositivo()
    {
        $this->assertEquals(120, Funcoes::fatorial(5));
    }

    public function testFatorialComZero()
    {
        $this->assertEquals(1, Funcoes::fatorial(0));
    }

    public function testFatorialComNumeroNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::fatorial(-3);
    }

    // Teste para ehPalindromo
    public function testEhPalindromoComPalindromo()
    {
        $this->assertTrue(Funcoes::ehPalindromo("Ame a ema"));
    }

    public function testEhPalindromoComNaoPalindromo()
    {
        $this->assertFalse(Funcoes::ehPalindromo("ChatGPT"));
    }

    // Teste para fahrenheitParaCelsius
    public function testFahrenheitParaCelsius()
    {
        $this->assertEquals(0, Funcoes::fahrenheitParaCelsius(32));
        $this->assertEquals(100, Funcoes::fahrenheitParaCelsius(212));
    }

    // Teste para calcularDesconto
    public function testCalcularDescontoComValoresValidos()
    {
        $this->assertEquals(90, Funcoes::calcularDesconto(100, 10));
    }

    public function testCalcularDescontoComPrecoNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calcularDesconto(-50, 10);
    }

    public function testCalcularDescontoComPorcentagemNegativa()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calcularDesconto(100, -20);
    }
}
