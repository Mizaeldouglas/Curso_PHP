<?php $render('header'); ?>

<head>
  <style>
  body {
    background-color: #a9c5a0;
    /* background-color: #085F63; */

    /* background-color: #085F63; */
  }

  body {
    font-family: Roboto;
    font-weight: 300;
  }

  .quoteForm {
    padding-top: 50px;
    text-align: center;
    width: 100%;
    left: 0;
    top: 0;
    overflow: hidden;
    backdrop-filter: blur(10pt);
    background: #a9c5a0;
  }

  .material-form {
    color: #085F63;
    background: #DCEBE6;
    display: inline-block;
    padding: 20pt;
    border-radius: 7pt;
    box-shadow: 0 0 30pt 4pt #000;
  }

  input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px rgba(255, 255, 255, 0) inset;
    color: #085F63;
    background-color: rgba(255, 255, 255, 0) !important;
  }

  .material-form-field {
    position: relative;
    max-width: 250pt;
    margin: 10pt 20pt 15pt 20pt;
    display: inline-block;
  }

  .material-form-field-input {
    padding: 15pt 0 6pt 0;
    font-size: 17pt;
    font-weight: 300;
    color: inherit;
    font-family: inherit;
    width: 100%;
    background: transparent;
    border-width: 0 0 1px 0;
    -webkit-transition: 0.4s ease all;
    transition: 0.4s ease all;
  }

  .material-form-field-input::-webkit-input-placeholder {
    font-family: "RobotoDraft", "Roboto", "Helvetica Neue, Helvetica, Arial", sans-serif;
    color: transparent;
  }

  .material-form-field-input:focus:valid,
  .material-form-field-input:focus:invalid {
    border-bottom-width: 1px;

  }

  .material-form-field-input:focus:valid {
    border-color: black;
    color: #085F63;
    border-bottom: 1pt solid #000;
    border-top: none;
    border-left: none;
    border-right: none;
  }

  .material-form-field-input:focus:invalid {
    border-color: #ff8383;
  }

  .material-form-field-input:focus::-webkit-input-placeholder,
  .material-form-field-input[value]::-webkit-input-placeholder,
  .material-form-field-input:valid::-webkit-input-placeholder {
    color: transparent;
    border-bottom: 1pt solid #000;
    border-top: none;
    border-left: none;
    border-right: none;
  }

  .material-form-field-input:focus+.material-form-field-label,
  .material-form-field-input[value]+.material-form-field-label,
  .material-form-field-input:valid+.material-form-field-label {
    -webkit-transform: translateY(-26pt);
    transform: translateY(-26pt);

  }

  .material-form-field-input+.material-form-field-label {
    -webkit-transition: 0.4s ease all;
    transition: 0.4s ease all;
    cursor: pointer;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    font-size: 20pt;
    left: 0;
    top: 15pt;
    position: absolute;
    color: #085F63;



  }

  .material-form-field-input:focus {
    outline: none;
  }

  .material-form+label {
    position: absolute;
    left: 20pt;
  }

  .material-form textarea {
    background: transparent;
    border-bottom: 1pt solid #085F63;
    border-top: none;
    border-left: none;
    border-right: none;
    resize: none;
    outline: none;
    color: #085F63;
    font-family: Roboto;
    margin: 10pt 0;
    font-size: 12pt;
    width: calc(100% - 45pt);
    height: 70pt
  }

  .quoteMore {
    text-align: center;
  }

  .quoteMore>div {
    text-align: left;
  }

  .quoteMore>div>h1 {
    text-align: left;
    font-weight: 400;
    font-size: 14pt;
    margin: 30pt 0 0 20pt;
    border-bottom: 1pt solid #000;
    display: inline-block;
  }

  .material-form .formButton {
    width: calc(100% - 40pt);
    padding: 13pt;
    margin: 34pt 0 10pt 0;
    color: #085F63;
    background: rgba(255, 255, 255, 0.0725);
    border: 2pt solid #085F63;
    border-radius: 100pt;
    font-size: 15pt;
    font-weight: 300;
    cursor: pointer;
    transition: all .1s ease-in-out;
  }

  .material-form .formButton:hover {
    color: #222;
    background: #085F63;
  }
  </style>
</head>

<body>
  <div class="quoteForm" id="quoteFormContain">
    <form action="<?php $base; ?>" method="post" class="material-form">
      <h1 style="font-weight: 300;">Adicionar um Usuário</h1><br />
      <section class="material-form-field">
        <div class="material-form-field-controls">
          <div class="form-field-controls-group">
            <input type="text" name="name" placeholder="Name" class="material-form-field-input">
            <label class="material-form-field-label">Nome</label>
          </div>
        </div>
      </section>
      <section class="material-form-field">
        <div class="material-form-field-controls">
          <div class="form-field-controls-group">
            <input type="email" id="email" name="email" placeholder="Email" title="Please enter Email"
              class="material-form-field-input">
            <label class="material-form-field-label">Email</label>
          </div>
        </div>
      </section>
      <br />
      <input type="submit" value="ADICIONAR" class="formButton">
    </form>
  </div>
</body>

<script>
$(function() {
  $('.material-form').css({
    'position': 'absolute',
    'left': '50%',
    'top': '50%',
    'margin-left': -$('.material-form').outerWidth() / 2,
    'margin-top': -$('.material-form').outerHeight() / 2
  });
});
</script>




<?php $render('footer'); ?>