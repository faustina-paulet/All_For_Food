<?php

namespace Drupal\module_example\Form;

use \Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

class MyCustomForm extends FormBase
{

  public function getFormId()
  {
    return 'my_custom_form' ;
  }

  public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state)
  {


    $form['nume_user']=[
      '#type' =>'textfield',
      '#title'=>'Nume',
      '#required'=> TRUE,
    ];

    $form['prenume_user']=[
      '#type' =>'textfield',
      '#title'=>'Prenume',
      '#required'=> TRUE,
    ];

    $form['email_user']=[
      '#type' =>'textfield',
      '#title'=>'Email',
      '#required'=> TRUE,
    ];

    $form['pareri']=[
      '#type' =>'textfield',
      '#title'=>'Pareri',
      '#required'=> TRUE,
    ];

    $form['actions']=[
      '#type'=>'actions',
    ];

    $form['action']['submit']=[

      '#type'=>'submit',
      '#value'=>'Submit'
    ];

    return $form;
  }

  public function submitForm(array &$form,FormStateInterface $form_state)
  {
    $nume_utilizator=$form_state->getValue('nume_user');
    $prenume_utilizator=$form_state->getValue('prenume_user');
    $email_utilizator=$form_state->getValue('email_user');

   /* if($nume_utilizator== )
    {
        \Drupal::messenger()->addMessage('Bine te-am regasit, folositi codul @discount_code la urmatoarea comanda');
    }
    else
    {
      \Drupal::messenger()->addMessage('Autentificati-va si veti putea folosi codul de Discount: Recipe10');
    }*/
  }
}
