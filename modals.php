<?php $nav="modals"; ?>

<?php include("includes/head.php") ?>


<div class="row">
  <div class="col s3 sidebar">
    <?php include("includes/nav.php") ?>
  </div>
  <div class="col s9">
    <div class="container">
      <h1>Modals</h1>
      <h2>Share modal</h2>

      <div id="#typography">

        <!-- Invite / Share Modal  -->
        <a class="waves-effect waves-light button button-dark modal-trigger" href="#modal1">Open Modal</a>

        <div id="modal1" class="modal">
          <div class="modal-content">
            <a href="#!" class="modal-close button-close"><i class="fas fa-times"></i></a>
            <h1><strong>Invite</strong> people to this deal</h1>
            <div class="share row">
              <div class="col s3 share-nav">
                <ul>
                  <li class="active">Team Members</li>
                  <li>Borrower</li>
                  <li>Others</li>
                </ul>
              </div>
              <div class="col s9 share-body">
                  <div class="row share-picker">
                    <div class="col s6 share-picker-select">
                      <div class="input-field">
                        <form>
                          <select>
                            <option value="0">Choose from CapitalQ users</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                          </select>
                        </form>
                      </div>
                    </div>
                    <div class="col s6 invite-by-email">
                      <div class="or">
                        OR
                      </div>
                      <div class="input-field">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Specify emails</label>
                      </div>
                      <a class="add-email" href="#"><i class="fas fa-plus-circle"></i></a>
                    </div>
                  </div>
                <div class="invited-people-area">
                 <label>Invites</label>
                 <div class="invited-people">
                   <div class="chip">
                      Mark Hudson
                      <i class="close material-icons">close</i>
                    </div>
                    <div class="chip">
                      peter.brown@gmail.com
                      <i class="close material-icons">close</i>
                    </div>
                  </div>
                </div>
                <div class="input-field share-email-text">
                  <textarea id="textarea2" class="materialize-textarea"></textarea>
                  <label for="textarea2">Invitation email body</label>
                </div>
            </div>
          </div>
          <div class="modal-buttons clearfix">
            <a href="#!" class="button button-dark">Invite Now</a>
            <a href="#!" class="button button-cancel modal-close">Cancel</a>
          </div>
        </div>
      </div>

      <p></p>

      <pre class=" language-markup">
      <code class=" language-markup">
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>#modal1<span class="token punctuation">"<span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>waves-effect waves-light button button-dark modal-trigger<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag">Share Modal<span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
      </code>
      </pre>

      <!-- Success Modal  -->
      <h2>Success modal</h2>

      <a class="waves-effect waves-light button button-dark modal-trigger" href="#modal2">Open Modal</a>

      <div id="modal2" class="modal small">
        <div class="modal-content">
          <a href="#!" class="modal-close button-close"><i class="fas fa-times"></i></a>
          <h1><i class="fas fa-check-circle"></i><strong>Congratulation!</strong>  You have accepted the deal invitatiion.</h1>
          <p>We have notified Peter Brown creator of deal: Francisco Red Cafe. What next? Create termsheet to start negotiation and achive deal agreement asap. </p>
          <div class="modal-buttons clearfix">
            <a href="#!" class="button button-dark">Chat with deal creator</a>
            <a href="#!" class="button button-light">Create terms-sheet</a>
            <a href="#!" class="button button-cancel modal-close">Cancel</a>
          </div>
        </div>
      </div>

      <p></p>

      <pre class=" language-markup">
      <code class=" language-markup">
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>#modal4<span class="token punctuation">"<span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>waves-effect waves-light button button-dark modal-trigger<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag">File Upload Modal<span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
      </code>
      </pre>

      <!-- Warning Modal  -->
      <h2>Warning modal</h2>
      <a class="waves-effect waves-light button button-dark modal-trigger" href="#modal3">Open Modal</a>

      <div id="modal3" class="modal small">
        <div class="modal-content">
          <a href="#!" class="modal-close button-close"><i class="fas fa-times"></i></a>
          <h1><i class="fas fa-question-circle"></i><strong>Warning!</strong>  You are about to remove this forewer.</h1>
          <p>Are you sure?  There will be no way to bring this back after this action.</p>
          <div class="modal-buttons clearfix">
            <a href="#!" class="button button-dark">Yes, I am sure</a>
            <a href="#!" class="button button-cancel modal-close">Cancel</a>
          </div>
        </div>
      </div>

      <p></p>

      <pre class=" language-markup">
      <code class=" language-markup">
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>#modal3<span class="token punctuation">"<span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>waves-effect waves-light button button-dark modal-trigger<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag">Warning Modal<span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
      </code>
      </pre>

      <!-- File Upload Modal  -->
      <h2>File upload modal</h2>
      <a class="waves-effect waves-light button button-dark modal-trigger" href="#modal4">Open Modal</a>

      <a class="btn-floating waves-effect waves-light btn-large btn-f-dark modal-trigger" href="#modal4"><i class="material-icons">add</i></a>

      <div id="modal4" class="modal">
        <div class="modal-content">
          <a href="#!" class="modal-close button-close"><i class="fas fa-times"></i></a>
          <h1><strong>File</strong>  Upoload.</h1>
          <div class="file-upload bg-grey5">
           <form action="#">
              <div class="file-field">
                <i class="fas fa-cloud-upload-alt"></i>
                <div>
                  Drag & drop your files in this area or click here to browser your computer.
                  <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate hide" type="text" placeholder="Upload one or more files">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-buttons clearfix">
            <a href="#!" class="button button-dark">Upload now</a>
            <a href="#!" class="button button-cancel modal-close">Cancel</a>
          </div>
        </div>
      </div>

      <p></p>

      <pre class=" language-markup">
      <code class=" language-markup">
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>#modal4<span class="token punctuation">"<span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>waves-effect waves-light button button-dark modal-trigger<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag">File Upload Modal<span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>


        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>#modal4<span class="token punctuation">" <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-floating btn-large waves-effect waves-light btn-f-dark modal-trigger<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>material-icons<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>add<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
      </code>
      </pre>

    </div>
  </div>
</div>


<?php include("includes/footer.php") ?>

