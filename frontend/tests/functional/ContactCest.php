<?php
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

/* @var $scenario \Codeception\Scenario */

class ContactCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage(['site/contact']);
    }

    public function checkContact(FunctionalTester $I)
    {
        $I->see('Contacto', 'h2');
    }

    public function checkContactSubmitNoData(FunctionalTester $I)
    {
        $I->submitForm('#contact-form', []);
        $I->see('Contacto', 'h2');
        $I->seeValidationError('Nombre no puede estar vacío.');
        $I->seeValidationError('Correo no puede estar vacío.');
        $I->seeValidationError('Asunto no puede estar vacío.');
        $I->seeValidationError('Mensaje no puede estar vacío.');
        $I->seeValidationError('El código de verificación es incorrecto.');
    }

    public function checkContactSubmitNotCorrectEmail(FunctionalTester $I)
    {
        $I->submitForm('#contact-form', [
            'ContactForm[name]' => 'tester',
            'ContactForm[email]' => 'tester.email',
            'ContactForm[subject]' => 'test subject',
            'ContactForm[body]' => 'test content',
            'ContactForm[verifyCode]' => 'testme',
        ]);
        $I->seeValidationError('Email is not a valid email address.');
        $I->dontSeeValidationError('Nombre no puede estar vacío.');
        $I->dontSeeValidationError('Asunto no puede estar vacío.');
        $I->dontSeeValidationError('Mensaje no puede estar vacío.');
        $I->dontSeeValidationError('El código de verificación es incorrecto.');
    }

    public function checkContactSubmitCorrectData(FunctionalTester $I)
    {
        $I->submitForm('#contact-form', [
            'ContactForm[name]' => 'tester',
            'ContactForm[email]' => 'tester@example.com',
            'ContactForm[subject]' => 'test subject',
            'ContactForm[body]' => 'test content',
            'ContactForm[verifyCode]' => 'testme',
        ]);
        $I->seeEmailIsSent();
        // $I->see('Thank you for contacting us. We will respond to you as soon as possible.');
    }
}
