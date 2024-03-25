<?php 

namespace myfrm;

use PDO;

class Validator {
  protected $errors = [];
  protected $data_items;
  protected $rules_list = ['required', 'min', 'max', 'email', 'match', 'unique',];
  protected $massages = [
    'required' => 'The :fieldname: field id required error',
    'min' => 'The :fieldname: field id min error on :rulevalue: characters',
    'min' => 'The :fieldname: field id min error on :rulevalue: characters',
    'max' => 'The :fieldname: field id max error ',
    'email' => 'The :fieldname: field id email error',
    'match' => 'The :fieldname: field must match :rulevalue: field',
    'unique' => 'The :fieldname: is already taken',
  ];

  public function validate($date = [], $rules = []){
    foreach($date as $fieldname => $value){
      if(isset($rules[$fieldname])){
        $this->check([
          'fieldname' => $fieldname,
          'value' => $value,
          'rules' => $rules[$fieldname],
        ]);
      }
    }
    return $this;
    
  }

  protected function check($field){
    foreach($field['rules'] as $rules => $rules_value){
      if(in_array($rules, $this->rules_list)){
        if(!call_user_func_array([$this, $rules], [$field['value'], $rules_value])){
          $this->addError($field['fieldname'], 
          str_replace([':fieldname:', ':rulevalue:'], 
          [$field['fieldname'], $rules_value], 
          $this->massages[$rules])
        );
        }
      }
    }
  }

  protected function addError($fieldname, $error){
    $this->errors[$fieldname][] = $error;
  }

  public function getErrors(){
    return $this->errors;
  }

  public function hasErrors(){
    return !empty($this->errors);
  }

  public function listErrors($fieldname){
    $output = '';
    if(isset($this->errors[$fieldname])){
      $output .= "<div  class='invalid-feedback d-block'>
      <ul class='list-unstyled'";
      foreach($this->errors[$fieldname] as $error){
        $output .= "<li>{$error}</li>";
      }
      $output .= "</ul></div>";
    }
    return $output;
  }

  protected function required($value, $rule_value){
    return !empty(trim($value));
  }
  protected function min($value, $rule_value){
    return mb_strlen($value, 'UTF-8') >= $rule_value;
  }
  protected function max($value, $rule_value){
    return mb_strlen($value, 'UTF-8') <= $rule_value;
  }
  protected function email($value, $rule_value){
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }
  protected function match($value, $rule_value){
      return $value === $this->data_items[$rule_value];
  }
  protected function unique($value, $rule_value){
    $data = explode(':', $rule_value);
    return (!db()->query("SELECT {$data[1]} FROM {$data[0]} WHERE {$data[1]} =?", [$value])->getColumn());
  }
}