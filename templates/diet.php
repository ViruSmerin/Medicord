<?php include('header.php'); ?>
<style type="text/css">
    #folder-tabs {
      overflow: hidden;
      width: 100%;
      margin: 0;
      padding: 0;
      list-style: none;
    }

    #folder-tabs li {
      float: left;
      margin: 0 .5em 0 0;
    }

    #folder-tabs a {
      position: relative;
      background: #FAFAFF;
      background-image: #FAFAFF;
      padding: .7em 3.5em;
      float: left;
      text-decoration: none;
      color: #444;
      text-shadow: 0 1px 0 rgba(255,255,255,.8);
      border-radius: 5px 0 0 0;
      box-shadow: 0 2px 2px rgba(0,0,0,.4);
    }

    #folder-tabs a:hover,
    #folder-tabs a:hover::after,
    #folder-tabs a:focus,
    #folder-tabs a:focus::after {
      background: #fff;
    }

    #folder-tabs a:focus {
      outline: 0;
    }

    #folder-tabs a::after {
      content:'';
      position:absolute;
      z-index: 1;
      top: 0;
      right: -.5em;
      bottom: 0;
      width: 1em;
      background: #FAFAFF;
      background-image: #FAFAFF;
      box-shadow: 2px 2px 2px rgba(0,0,0,.4);
      transform: skew(10deg);
      border-radius: 0 5px 0 0;
    }

    #folder-tabs #current a,
    #folder-tabs #current a::after {
      background: #fff;
      z-index: 3;
    }

    #content {
      background: #fff;
      height: 100%;
      position: relative;
      z-index: 2;
      border-radius: 0 5px 5px 5px;
    }
</style>
    <div class="app-main__inner">
        <div class="app-page-title pt-18">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="card-body p-0">
                        <div class="mr-2 btn-group">
                            <h5 style="font-size: 18px;font-weight: 700;padding-bottom: 10px;">Meal List</h5>
                        </div>

                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light">
                                <span class="btn-icon-wrapper opacity-7">
                                <i class="fas fa-print"></i>
                            </span>
                        </a>
                    </div>

                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-filter"></i>
                            </span>
                            Fitler
                        </a>
                    </div>

                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-edit"></i>
                            </span>
                            Edit Column
                        </a>
                    </div>
                    <div class="d-inline-block">
                        <a href="./new_meal.php" class="mb-2 mr-2 btn btn-primary color-white">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-plus"></i>
                            </span>
                            Add New Meal
                        </a>
                    </div>
                </div>    
            </div>
        </div>

        <div class="pt-20">
            <ul id="folder-tabs">
                <li><a href="#" name="tab1"><span><i class="fas fa-coffee pr-2"></i></span>Breakfast</a></li>
                <li><a href="#" name="tab2"><span><i class="fas fa-box pr-2"></i></span>Lunch</a></li>
                <li><a href="#" name="tab3"><span><i class="fas fa-stroopwafel pr-2"></i></i></span>Dinner</a></li>
                <li><a href="#" name="tab4"><span><i class="fas fa-cookie pr-2"></i></span>Snack</a></li>
            </ul>

            <div id="content">
                <div id="tab1">
                    <div class="main-card mb-3 card" style="border-radius: 0px 10px 10px 10px;">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th class="bt-0" scope="col" width="5%"></th>
                                    <th class="bt-0" scope="col" width="10%">Food Name</th>
                                    <th class="bt-0" scope="col" width="25%">Portion Size</th>
                                    <th class="bt-0" scope="col" width="13%">Carbs (in gm)</th>
                                    <th class="bt-0" scope="col" width="12%">Calories</th>
                                    <th class="bt-0" scope="col" width="25%">Comments</th>
                                    <th class="bt-0" scope="col" width="10%">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="tab2">
                    <div class="main-card mb-3 card" style="border-radius: 0px 10px 10px 10px;">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th class="bt-0" scope="col" width="5%"></th>
                                    <th class="bt-0" scope="col" width="10%">Food Name</th>
                                    <th class="bt-0" scope="col" width="25%">Portion Size</th>
                                    <th class="bt-0" scope="col" width="13%">Carbs (in gm)</th>
                                    <th class="bt-0" scope="col" width="12%">Calories</th>
                                    <th class="bt-0" scope="col" width="25%">Comments</th>
                                    <th class="bt-0" scope="col" width="10%">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="tab3">
                    <div class="main-card mb-3 card" style="border-radius: 0px 10px 10px 10px;">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th class="bt-0" scope="col" width="5%"></th>
                                    <th class="bt-0" scope="col" width="10%">Food Name</th>
                                    <th class="bt-0" scope="col" width="25%">Portion Size</th>
                                    <th class="bt-0" scope="col" width="13%">Carbs (in gm)</th>
                                    <th class="bt-0" scope="col" width="12%">Calories</th>
                                    <th class="bt-0" scope="col" width="25%">Comments</th>
                                    <th class="bt-0" scope="col" width="10%">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="tab4">
                    <div class="main-card mb-3 card" style="border-radius: 0px 10px 10px 10px;">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th class="bt-0" scope="col" width="5%"></th>
                                    <th class="bt-0" scope="col" width="10%">Food Name</th>
                                    <th class="bt-0" scope="col" width="25%">Portion Size</th>
                                    <th class="bt-0" scope="col" width="13%">Carbs (in gm)</th>
                                    <th class="bt-0" scope="col" width="12%">Calories</th>
                                    <th class="bt-0" scope="col" width="25%">Comments</th>
                                    <th class="bt-0" scope="col" width="10%">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                              <label class="custom-control-label" for="customCheck1"></label>
                                          </div>
                                        </td>
                                        <td>Milk</td>
                                        <td>
                                            <div class="row pt-10 pb-10">
                                                <div class="col-md-3">
                                                    <img class="rounded-circle mw-50" src="assets/img/food/milk-1.jpg" alt="">
                                                </div>
                                                <div class="col-md-9 vam">
                                                    <p class="mb-0 bold">A: 200 ml</p>
                                                    <p>Cup Size</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9</td>
                                        <td>134</td>
                                        <td class="pr-20">
                                            <p>
                                                FCT cow milk 100g =4.4g carb & 67Kcal 100g= 100ml
                                            </p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropleft d-inline-block pt-10">
                                                <button class="mb-2 mr-2 btn btn-light"><i class="fas fa-cog"></i></button>
                                                <button class="d-inline-block mb-2 mr-2 btn btn-light"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#content").find("[id^='tab']").hide();
            $("#folder-tabs li:first").attr("id","current");
            $("#content #tab1").fadeIn();

            $('#folder-tabs a').click(function(e) {
                e.preventDefault();
                if ($(this).closest("li").attr("id") == "current"){
                 return;
                }
                else{
                  $("#content").find("[id^='tab']").hide();
                  $("#folder-tabs li").attr("id","");
                  $(this).parent().attr("id","current");
                  $('#' + $(this).attr('name')).fadeIn();
                }
            });
        });
    </script>

<?php include('footer.php'); ?>
        