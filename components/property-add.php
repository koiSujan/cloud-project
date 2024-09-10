<section class="listings">

  <h1 class="heading">Add Property For Sale</h1>

  <div class="app-box-wrap">

    <div class="app-box">
      <form
        enctype="multipart/form-data"
        id="property-form"
        action="../core/properties.php"
        method="post"
        class="app-form">
        <div class="app-form-group">
          <label for="p-title" class="app-form-label">Title <span class="is-required">*</span></label>
          <input name="title" type="text" id="p-title" class="app-input" placeholder="Property Name Or Title...">
        </div>
        <div class="app-form-group">
          <label for="p-addr" class="app-form-label">Address<span class="is-required">*</span></label>
          <input name="address" type="text" id="p-addr" class="app-input" placeholder="11 Swan Av , Strathfield ...">
        </div>
        <div class="app-form-group">
          <label for="p-own" class="app-form-label">Owner <span class="is-required">*</span></label>
          <input name="owner" type="text" id="p-own" class="app-input" placeholder="Owner Name ...">
        </div>
        <div class="app-form-group">
          <label for="p-cntct" class="app-form-label">Contact <span class="is-required">*</span></label>
          <input name="contact" type="text" id="p-cntct" class="app-input" placeholder="Contact Number ...">
        </div>
        <div class="app-form-group">
          <label for="p-price" class="app-form-label">Price <span class="is-required">*</span></label>
          <input name="price" type="text" id="p-price" class="app-input" placeholder="AUD 10.5M ... ">
        </div>
        <div class="app-form-group">
          <label for="p-type" class="app-form-label">Type <span class="is-required">*</span></label>
          <select name="type" id="p-type" class="app-input">
            <option value="House">House</option>
            <option value="Flat">Flat</option>
            <option value="Appartment">Unit/Appartment</option>
            <option value="Townhouse">Townhouse</option>
            <option value="Villa">Villa</option>
            <option value="Villa">Other</option>
          </select>
        </div>
        <div class="app-form-group">
          <label for="p-status" class="app-form-label">Status <span class="is-required">*</span></label>
          <select name="status" id="p-status" class="app-input">
            <option value="Unsold">Unsold</option>
            <option value="Sold">Sold</option>
          </select>
        </div>
        <div class="app-form-group">
          <div class="flx flx-between">
            <div>
              <label for="p-bed" class="app-form-label">Bedding <span class="is-required">*</span></label>
              <select name="bed" id="p-bed" class="app-input" style="min-width:120px">
                <?php
                for ($x = 1; $x <= 10; $x++) {
                  echo "<option value='$x'>" . $x . "</option>";
                }
                ?>
              </select>
            </div>
            <div>
              <label for="p-bath" class="app-form-label">Bathroom <span class="is-required">*</span></label>
              <select name="bathroom" id="p-bath" class="app-input" style="min-width:120px">
                <?php
                for ($x = 1; $x <= 10; $x++) {
                  echo "<option value='$x'>" . $x . "</option>";
                }
                ?>
              </select>
            </div>
            <div>
              <label for="p-area" class="app-form-label">Area <span class="is-required">*</span></label>
              <input name="area" type="text" id="p-area" class="app-input" placeholder="750 sq m">
            </div>
          </div>
        </div>
        <div class="app-form-group">
          <label for="p-cover_img" class="app-form-label">Cover Image (png, jpg, jpeg) <span class="is-required">*</span></label>
          <input type="file" accept="images/*" id="p-cover_img" class="app-input" name="cover_image">
        </div>
        <div class="app-form-group">
          <label for="p-imgs" class="app-form-label">Images (png, jpg, jpeg)</label>
          <input type="file" multiple accept="images/*" id="p-imgs" class="app-input" name="images[]">
        </div>
        <div class="app-form-group">
          <label for="description" class="app-form-label">
            Description
          </label>
          <textarea name="description" id="description" class="app-input">

                </textarea>
        </div>
        <div class="app-form-group mg-y-16">
          <button class="theme-btn theme-btn-submit">Submit</button>
          <button class="theme-btn theme-btn-alt mg-x">Cancel</button>

        </div>
      </form>
    </div>

  </div>
</section>