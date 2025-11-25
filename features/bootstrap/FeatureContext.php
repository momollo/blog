<?php
use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class FeatureContext extends MinkContext implements Context
{
/**
* @Given I am a registered user with email :email and password :password
*/
public function iAmARegisteredUserWithEmailAndPassword($email, $password)
{
    User::create([
        'name' => 'John Doe',
        'email' => $email,
        'password' => Hash::make($password),

]);
}
/**
* @Then I should be redirected to the dashboard
*/
public function iShouldBeRedirectedToTheDashboard()
{
$this->assertPageAddress('/dashboard');
}
/**
* @Then I should see :text
*/
public function iShouldSee($text)
{
$this->assertPageContainsText($text);
}

}
