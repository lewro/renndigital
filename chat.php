<?php $nav="chat"; ?>

<?php include("includes/head.php") ?>


<div class="row">
  <div class="col s3 sidebar">
    <?php include("includes/nav.php") ?>
  </div>
  <div class="col s9">
    <div class="container">
      <h1>Chat</h1>

      <h2>Chat interface allows multi-party communication</h2>
      <div class="dicussion row">
        <div class="col s4 dicussion-nav">
          <ul>
            <li class="active row">
              <span class="col s9 dicussion-name">Mark Hudson</span>
              <span class="col s2">
                <span class="dicussion-new">1</span>
              </span>
              <span class="col s1">
                <span class="dicussion-settings"><i class="fas fa-ellipsis-v"></i></span>
              </span>
            </li>

            <li class="row">
              <span class="col s9 dicussion-name">peter.brown@gmail.com</span>
              <span class="col s2">
                <span class="dicussion-new">1</span>
              </span>
              <span class="col s1">
                <span class="dicussion-settings"><i class="fas fa-ellipsis-v"></i></span>
              </span>
            </li>
            <li class="row">
              <span class="col s9 dicussion-name">james.white@gmail.com</span>
              <span class="col s2">
              </span>
              <span class="col s1">
                <span class="dicussion-settings"><i class="fas fa-ellipsis-v"></i></span>
              </span>
            </li>
            <li class="row">
              <span class="col s9 dicussion-name">james.grifin@gmail.com</span>
              <span class="col s2">
              </span>
              <span class="col s1">
                <span class="dicussion-settings"><i class="fas fa-ellipsis-v"></i></span>
              </span>
            </li>
            <li class="row">
              <span class="col s9 dicussion-name">paul.davidson@gmail.com</span>
              <span class="col s2">
                <span class="dicussion-new">1</span>
              </span>
              <span class="col s1">
                <span class="dicussion-settings"><i class="fas fa-ellipsis-v"></i></span>
              </span>
            </li>
            <li class="row">
              <span class="col s9 dicussion-name">roger.greg@gmail.com</span>
              <span class="col s2">
              </span>
              <span class="col s1">
                <span class="dicussion-settings"><i class="fas fa-ellipsis-v"></i></span>
              </span>
            </li>
          </ul>
          <div class="dicussion-invite row">
            <div class="col s10">
              <div class="input-field">
                <input id="invite" name="invite" type="email" class="validate"></input>
                <label for="invite">Invite new by email</label>
              </div>
            </div>
            <div class="col s2">
              <a class="add-email" href="#"><i class="fas fa-plus-circle"></i></a>
            </div>
          </div>
        </div>
        <div class="col s8 dicussion-body">
          <div class="dicussion-item new row">
            <div class="col s2">
              <span class="dicussion-first-name">Mark</span>
              <span class="dicussion-time">10:00</span>
              <span class="dicussion-date">12 Mar 2019</span>
            </div>
            <div class="col s10">
              <div class="dicussion-text">
                Hi Peter<br/>
                Do you mean list of real estates we have bought during the year 2018?
              </div>
            </div>
          </div>

          <div class="dicussion-item row">
            <div class="col s2">
              <span class="dicussion-first-name">You</span>
              <span class="dicussion-time">10:00</span>
              <span class="dicussion-date">12 Mar 2019</span>
            </div>
            <div class="col s10">
              <div class="dicussion-text">
                Hi Mark<br/>
                Could you send me the monthly updates please?
              </div>
            </div>
          </div>

          <div class="dicussion-item row">
            <div class="col s2">
              <span class="dicussion-first-name">Mark</span>
              <span class="dicussion-time">10:00</span>
              <span class="dicussion-date">12 Mar 2019</span>
            </div>
            <div class="col s10">
              <div class="dicussion-text">
                Hi Peter<br/>
                Do you have all the files you need?
              </div>
            </div>
          </div>

          <div class="dicussion-item row">
            <div class="col s2">
              <span class="dicussion-first-name">You</span>
              <span class="dicussion-time">10:00</span>
              <span class="dicussion-date">12 Mar 2019</span>
            </div>
            <div class="col s10">
              <div class="dicussion-text">
                Hi Peter<br/>
                Do you mean list of real estates we have bought during the year 2018?
              </div>
            </div>
          </div>

          <div class="dicussion-new-form">
            <div class="input-field">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Specify your reply...</label>
            </div>
          <div class="input-field">
              <input type="submit" id="submit" value="Send reply" class="button button-dark" />
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<?php include("includes/footer.php") ?>

