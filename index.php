<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />
</head>

<body>
  <div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
      <form class="uk-form-stacked js-login">

        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Email</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="you@sample.com...">
          </div>
        </div>

        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Password</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Your Password">
          </div>
        </div>

        <div class="uk-margin">
          <button class="uk-button uk-button-default" type="submit">login</button>
        </div>
      </form>
    </div>
  </div>

  <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>

</body>

</html>