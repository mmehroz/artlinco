@extends('layout.adminheader.adminheader')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/public/css/admincss/quizmanage.css') }}"></link>
<style>
footer{
  margin-top: 0px !important;
}
</style>
  <main class="mains">
      <div class="container align-items-center justify-content-center text-center" style="margin-top: 161px;">
        <div class="row justify-content-between">
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="table-wrap">
            <table class="table mytable">
              <thead class="thead-primary">
              <tr class="theadrow-primary">
              <th>Question</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>You are the center of attention at a party?</td>
                </tr>
                <tr>
                  <td>Rarely worry about others?</td>
                </tr>
                <tr>
                  <td>You are always prepared?</td>
                </tr>
                <tr>
                  <td>Gets easily stressed?</td>
                </tr>
                <tr>
                  <td>You have a large vocabulary?</td>
                </tr>
                <tr>
                  <td>Overall you are a setisfied with yourself?</td>
                </tr>
                <tr>
                  <td>You do not talk much?</td>
                </tr>
                <tr>
                  <td>Is intressted in other people.?</td>
                </tr>
                <tr>
                  <td>Often forkerts where you put your stuff?</td>
                </tr>
                <tr>
                  <td>Is relaxed most of the time?</td>
                </tr>
                <tr>
                  <td>Hard time understanding abstract ideas?</td>
                </tr>
                <tr>
                  <td>Sometimes you dont feel good enough?</td>
                </tr>
                <tr>
                  <td>Feel good in other peoples company?</td>
                </tr>
                <tr>
                  <td>People get insulted by you?</td>
                </tr>
                <tr>
                  <td>You worry about stuff?</td>
                </tr>
                <tr>
                  <td>You have a lively fantasy?</td>
                </tr>
                <tr>
                  <td>I feel like i have  a good set of abilities and competencies?</td>
                </tr>
                <tr>
                  <td>You stay in the background?</td>
                </tr>
                <tr>
                  <td>You sympathize with others feelings?</td>
                </tr>
             <tr>
                  <td>You are messy?</td>
                </tr>
                <tr>
                  <td>You rarely feel under pressure?</td>
                </tr>
                <tr>
                  <td>You have no intrest in abstract ideas?</td>
                </tr>
                <tr>
                  <td>I am able to complete tasks equally to others?</td>
                </tr>
                <tr>
                  <td>I am the conversation starter?</td>
                </tr>
                <tr>
                  <td>You have no intrest in others problems?</td>
                </tr>
                <tr>
                  <td>You do things straight away?</td>
                </tr>
                <tr>
                  <td>I easily get distrubed.?</td>
                </tr>
                <tr>
                  <td>I have good ideas?</td>
                </tr>
                <tr>
                  <td>I dont feel like i have much to be proud of?</td>
                </tr>
              </tbody>
              </table>
          </div>
          </div>
          </div>
      </div>
  </main>
@endsection