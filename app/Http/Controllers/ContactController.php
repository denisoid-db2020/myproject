<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\ContactModel;
class ContactController extends Controller
{
public function submit(ContactRequest $req){
$contact= new ContactModel();
$contact->name = $req->input('name');
$contact->mail = $req->input('mail');
$contact->number = $req->input('number');
$contact->message = $req->input('message');
$contact->save();

return redirect()->route('home')->with('success', "Сообщение было отправлено");
  }

  public function allData(){
    return view('messages' , ['data' =>ContactModel::all()]);
  }

  public function OneMessage($id){
    $contact= new ContactModel;
    return view('onemessage' , ['data' =>$contact->find($id)]);
  }

  public function updateMessage($id){
    $contact= new ContactModel;
    return view('message-update' , ['data' =>$contact->find($id)]);
  }

  public function UpdateMessageSubmit($id,ContactRequest $req){
  $contact=  ContactModel::find($id);
  $contact->name = $req->input('name');
  $contact->mail = $req->input('mail');
  $contact->number = $req->input('number');
  $contact->message = $req->input('message');
  $contact->save();
  return redirect()->route('contact-message', $id)->with('success', "Сообщение было изменено");
    }

  public function deleteMessage($id){
ContactModel::find($id)->delete();
  return redirect()->route('contact-data')->with('success', "Сообщение было удалено");
    }
}
