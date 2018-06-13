<link href="/public/css/index.css" type="text/css" rel="stylesheet" />
<div class="fullscrn homescrn js-fullScreen">
    <img class="imgBG" src="/public/image/China-2b.jpg">
    <header class="er_reservation">
        <p class="homeTitle"><em>Live More. Ride More!</em></p>

        <div class="reservation js-combinedWidget">

            <div class="options js-options">
                <ul class="optionsblk widgetTabs">
                    <li class="selected js-rentalTrigger">
                        <a href="Javascript:;">租赁</a>
                    </li>

                    <li class="packages ">
                        <a href="#">摩托车 &amp; 酒店</a>
                    </li>

                    <li class=" js-toursTrigger">
                        <a href="Javascript:;">旅游</a>
                    </li>

                    <li class="deals">
                        <a href="#">促销特惠</a>
                    </li>

                    <li class="membership-tab js-membershipTab">
                        <a href="#">
                            会员
                        </a>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>

            <div class="js-rentalSearch" style="">
                <div class="header js-header">
                    <p class="form_title">搜索租赁摩托车</p>
                    <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                    <div class="clearfix"></div>
                </div>

                <div class="js-reservationFormContainer">
                    <form action="#" method="post" class="res_widget" target="_blank">
                        <input type="hidden" name="authenticity_token" value="1YTxxuLZwsPCnfl6mmXwrGeUXsLbZrRnQCJH85cn4kc=" />
                        <input type="hidden" name="reservation[reservation_type_id]" value="1">
                        <div class="form_bot">
                            <div class="loader js-loading" style="display:none;">
                                <span><span><img src="/public/image/Loading-023da9421c5001dc2879575217b0add0.gif" /></span></span>
                            </div>


                            <div class="field-block fullWidth headblk js-numberSelection">
                                <label for="">需要几辆摩托车</label>
                                <ul class="optionsblk motorNum">
                                    <li>
                                        <div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox" id="vehicles_count_1_1" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        <label class="radio" for="vehicles_count_1_1">1</label>
                                    </li>
                                    <li>
                                        <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox" id="vehicles_count_2_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        <label class="radio" for="vehicles_count_2_1">2</label>
                                    </li>
                                    <li>
                                        <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox" id="vehicles_count_3_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        <label class="radio" for="vehicles_count_3_1">3</label>
                                    </li>
                                    <li>
                                        <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox" id="vehicles_count_other_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        <label class="radio fieldIF js-label" for="vehicles_count_other_1">
                                            其他
                                        </label>
                                        <input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]" class="fieldIFinput js-numberField" value="" style="display: none;">
                                    </li>
                                </ul>
                            </div>

                            <div class="field-block pickup-location">
                                <label for="">行驶出发城市</label>
                                <select name="reservation[pickup_location_id]" data-fieldType="pickup_location"
                                        class="selectWithSearch js-locationsSelect">
                                    <option value="" selected=&quot;selected&quot;>
                                        取车城市
                                    </option>
                                    <optgroup label="澳大利亚">
                                        <option value="199"
                                        >
                                            Cairns
                                        </option>
                                        <option value="221"
                                        >
                                            Melbourne
                                        </option>
                                        <option value="87"
                                        >
                                            布里斯班门店
                                        </option>
                                        <option value="190"
                                        >
                                            悉尼门店
                                        </option>
                                    </optgroup>
                                    <optgroup label="英国">
                                        <option value="301"
                                        >
                                            Silverstone
                                        </option>
                                    </optgroup>
                                    <optgroup label="荷兰">
                                        <option value="60"
                                        >
                                            荷兰门店
                                        </option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="field-block dropoff-location">
                                <label>行驶终点城市</label>
                                <select name="reservation[dropoff_location_id]" data-fieldType="dropoff_location"
                                        class="selectWithSearch js-locationsSelect">
                                    <option value="similar_to_pl"
                                            selected=&quot;selected&quot;>
                                        与取车城市相同
                                    </option>
                                </select>
                            </div>
                            <div class="field-block">
                                <label for="">出发日期/时间</label>
                                <div class="dateTime">
                                    <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">
                                </div>
                            </div>
                            <div class="field-block returning-date">
                                <label for="">返还日期/时间</label>
                                <div class="dateTime">

                                        <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="widget_btns">
                            <a href="Javascript:;" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                        </div>
                    </form>
                </div>


                <div class="promo-notifications js-promo">
                    <div class="discounts group-discount">
                        <span class="arrow"></span>
                        <div class="body">
                            <h4>团队预订可以享受更多优惠！</h4>
                            <span class="percent">10%</span>
                            <span class="rule">3辆车<i>至少</i></span>
                        </div>
                        <div class="body">
                            <h3>
                                大部分预订只需支付20%的定金哦
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="js-toursSearch" style="display:none;">
                <div class="header js-header">
                    <p class="form_title">搜索摩托车旅游</p>
                    <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                    <div class="clearfix"></div>
                </div>

                <div class="js-toursFormContainer">
                    <form accept-charset="UTF-8" action="tours/search_widget.html" method="post">
                        <div style="margin:0;padding:0;display:inline">
                            <input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="1YTxxuLZwsPCnfl6mmXwrGeUXsLbZrRnQCJH85cn4kc=" />
                        </div>
                        <div class="form_bot tourWidget">
                            <div class="loader js-loading" style="display:none;">
                                <span><img src="/public/image/Loading-023da9421c5001dc2879575217b0add0.gif" /></span>
                            </div>

                            <div class="field-block fullWidth headblk">
                                <ul class="optionsblk motorNum tours-type">
                                    <li>
                                        <input checked="checked" class="js-line" id="tour_type_id_" name="tour_type_id" type="radio" value="" />
                                        <label class="radio" for="tour_search_widget_tour_type_id_">
                                            所有旅行项目
                                        </label>
                                    </li>

                                    <li>
                                        <input class="js-line js-tourType-guided" id="tour_type_id_1" name="tour_type_id" type="radio" value="1" />
                                        <label class="radio" for="tour_search_widget_tour_type_id_1">
                                            团队游
                                        </label>
                                        <div class="type-content">
                                            <ul>
                                                <li><span class="icons-checkmark"></span>骑行期间所需的燃油</li>
                                                <li><span class="icons-checkmark"></span>双语导游</li>
                                                <li><span class="icons-checkmark"></span>每日早餐</li>
                                                <li><span class="icons-checkmark"></span>定制夹克／门票／景点</li>
                                                <li><span class="icons-checkmark"></span>门到门行李运送</li>
                                                <li><span class="icons-checkmark"></span>摩托车租赁</li>
                                                <li><span class="icons-checkmark"></span>还有很多，很多！</li>
                                                <li><span class="icons-checkmark"></span>和团队一起骑行</li>
                                                <li><span class="icons-checkmark"></span>支持车辆和司机</li>
                                                <li><span class="icons-checkmark"></span>3到4星级的酒店</li>
                                                <li class="more-link "><a class="js-readMore" href="Javascript:;">
                                                        查看更多</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <input class="js-line js-tourType-self_drive" id="tour_type_id_2" name="tour_type_id" type="radio" value="2" />
                                        <label class="radio" for="tour_search_widget_tour_type_id_2">
                                            自驾游
                                        </label>
                                        <div class="type-content">
                                            <ul>
                                                <li><span class="icons-checkmark"></span>专业设计的骑行路线</li>
                                                <li><span class="icons-checkmark"></span>电子版骑行路线指引</li>
                                                <li><span class="icons-checkmark"></span>提供GPS＊</li>
                                                <li><span class="icons-checkmark"></span>详细的旅行计划</li>
                                                <li><span class="icons-checkmark"></span>摩托车租赁</li>
                                                <li><span class="icons-checkmark"></span>摩托车友好酒店</li>
                                                <li class="more-link "><a class="js-readMore" href="Javascript:;">
                                                        查看更多</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="tour-filters-widget">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <label for="">国家</label>
                                        <select class="selectWithSearch js-searchableSelect" id="country_id" name="country_id">
                                            <option value="">所有国家</option>
                                            <option value="13">澳大利亚</option>
                                            <option value="38">加拿大</option>
                                            <option value="105">India</option>
                                            <option value="157">墨西哥</option>
                                            <option value="198">新加坡</option>
                                            <option value="233">美国</option>
                                        </select>
                                    </div>
                                    <div class="span6">
                                        <label for="">城市</label>
                                        <select class="selectWithSearch js-searchableSelect" id="start_location_id" name="start_location_id">
                                            <option value="">所有城市</option>
                                            <option value="2">旧金山门店</option>
                                            <option value="14">达拉斯门店</option>
                                            <option value="8">棕榈泉门店</option>
                                        </select>
                                    </div>
                                    <div class="span12">
                                        <label for="">旅游套餐名字</label>
                                        <select class="selectWithSearch js-searchableSelect" id="tour_id" name="tour_id">
                                            <option value="">所有旅游套餐名字</option>
                                            <option value="2">San Francisco Motorcycle Tour</option>
                                            <option value="3">Texas Motorcycle Tour</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="widget_btns">
                            <a href="Javascript:;" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                        </div>

                    </form>
                    <script type="text/html" class="js-comparisonOverlay">

                        <div class="modal hide fade wide-overlay" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header ">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">探索方式</h3>
                            </div>

                            <div class="clearfix"></div>

                            <div class="modal-body">
                                <table dir="rtl" class="table table-bordered experience_table">
                                    <thead>
                                    <tr>
                                        <td dir="ltr">
                                            <b>团队旅行</b>
                                        </td>
                                        <td dir="ltr">
                                            <b>公路旅行</b>
                                        </td>
                                        <td dir="ltr">
                                            <b>自驾旅行</b>
                                        </td>
                                        <td dir="ltr">
                                            <b>摩托车＋酒店</b>
                                        </td>
                                        <td dir="ltr">
                                            <b>只有摩托车</b>
                                        </td>

                                        <td></td>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>

                                        <td>最新型的摩托车租赁</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>

                                        <td>摩托车友好酒店</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>

                                        <td>可以定制属于自己的旅行路线</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>

                                        <td>最佳摩托车旅行路线</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>

                                        <td>EagleRider旅行攻略</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>运送行李的支持车辆</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>备用摩托车</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>专业支持车驾驶员</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>专业双语导游</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>团队旅行体验</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>每天提供丰盛早餐</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>骑行时所需的汽油</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>欢迎晚宴</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>EagleRider欢送派对</td>
                                    </tr>
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td dir="ltr">
                                            <span class="starting-at">起始价格</span>
                                            <span class="price-box">
            $349/day
          </span>
                                        </td>
                                        <td dir="ltr">
                                            <span class="starting-at">起始价格</span>
                                            <span class="price-box">
            $249/day
          </span>
                                        </td>
                                        <td dir="ltr">
                                            <span class="starting-at">起始价格</span>
                                            <span class="price-box">
            $229/day
          </span>
                                        </td>
                                        <td dir="ltr">
                                            <span class="starting-at">起始价格</span>
                                            <span class="price-box">
            $179/天
          </span>
                                        </td>
                                        <td dir="ltr">
                                            <span class="starting-at">起始价格</span>
                                            <span class="price-box">
            $149/day
          </span>
                                        </td>
                                        <td></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </script>
                </div>


                <div class="promo-notifications js-promo">
                    <div class="discounts group-discount">
                        <span class="arrow"></span>
                        <div class="body">
                            <h4>团队预订可以享受更多优惠！</h4>
                            <span class="percent">5%</span>
                            <span class="rule">3辆车<i>至少</i></span>
                        </div>
                        <div class="body">
                            <h3>
                                大部分预订只需支付20%的定金哦
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="js-packagesSearch" style="display:none;">
                <div class="header js-header">
                    <p class="form_title">定制个人行程 </p>
                    <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                    <div class="clearfix"></div>
                </div>

                <div class="js-reservationFormContainer">
                    <form action="reservation_widget/new.html" method="post" class="res_widget" target="_blank">
                        <input type="hidden" name="authenticity_token" value="1YTxxuLZwsPCnfl6mmXwrGeUXsLbZrRnQCJH85cn4kc=" />
                        <input type="hidden" name="reservation[reservation_type_id]"
                               value="2">


                        <div class="form_bot">
                            <div class="loader js-loading" style="display:none;">
                                <span><span><img src="/public/image/Loading-023da9421c5001dc2879575217b0add0.gif" /></span></span>
                            </div>


                            <div class="field-block fullWidth headblk js-numberSelection">
                                <label for="">需要几辆摩托车</label>
                                <ul class="optionsblk motorNum">
                                    <li>
                                        <input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox"
                                               id="vehicles_count_1_2"
                                               checked=&quot;checked&quot;>
                                        <label class="radio" for="vehicles_count_1_2">1</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox"
                                               id="vehicles_count_2_2"
                                        >
                                        <label class="radio" for="vehicles_count_2_2">2</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox"
                                               id="vehicles_count_3_2"
                                        >
                                        <label class="radio" for="vehicles_count_3_2">3</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox"
                                               id="vehicles_count_other_2"
                                        >
                                        <label class="radio fieldIF js-label"
                                               for="vehicles_count_other_2">
                                            其他
                                        </label>
                                        <input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]"
                                               class="fieldIFinput js-numberField"
                                               value="" />
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget_btns">
                            <a href="Javascript:;" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </header>

    <a class="btn-light viewmore visible-desktop js-viewMoreTrigger" href="Javascript:;">
        <span class="icn-arrowOrangeDown"></span> 查看更多
    </a>
</div>

<div id="js-viewMore" class="midSection psection container js-featuredDestinations">
    <div class="row">
        <h2 class="midSecTitle">
            <em>精选目的地</em>
        </h2>

        <ul class="thumbnails span12">
            <li class="span3">

                <a class="thumbnail" title="Los Angeles" href="#">
                    <img src="/public/image/lax.jpg" alt="Los Angeles">
                    <p>
                        Los Angeles
                    </p>
                </a>
            </li>
            <li class="span3">

                <a class="thumbnail" title="Las Vegas" href="#">
                    <img src="/public/image/las.jpg" alt="Las Vegas">
                    <p>
                        Las Vegas
                    </p>
                </a>
            </li>
            <li class="span3">

                <a class="thumbnail" title="Route 66" href="#">
                    <img src="/public/image/route66.jpg" alt="Route 66">
                    <p>
                        Route 66
                    </p>
                </a>
            </li>
            <li class="span3">

                <a class="thumbnail" title="Orlando" href="#">
                    <img src="/public/image/orlando.jpg" alt="Orlando">
                    <p>
                        Orlando
                    </p>
                </a>
            </li>
            <li class="span3">

                <a class="thumbnail" title="Miami" href="#">
                    <img src="/public/image/miami.jpg" alt="Miami">
                    <p>
                        Miami
                    </p>
                </a>
            </li>
            <li class="span3">

                <a class="thumbnail" title="San Francisco" href="#">
                    <img src="/public/image/sfo.jpg" alt="San Francisco">
                    <p>
                        San Francisco
                    </p>
                </a>
            </li>
            <li class="span3">

                <a class="thumbnail" title="Chicago" href="#">
                    <img src="/public/image/chicago.jpg" alt="Chicago">
                    <p>
                        Chicago
                    </p>
                </a>
            </li>
            <li class="span3">

                <a class="thumbnail" title="Wild West" href="#">
                    <img src="/public/image/3-cf53a568f2a44442f967e4d9627e7e49.jpg" alt="Wild West">
                    <p>
                        Wild West
                    </p>
                </a>
            </li>
        </ul>

        <div class="section_btns">
            <a href="#" class="btn-highlight">
                更多目的地<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span>
            </a>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row table-and-ads">
        <div class="span8 er-specials js-deals">
            <h2>
                热门折扣
            </h2>
            <table class="table specialsTable dealsHomePage">
                <tbody>
                <tr>
                    <th>折扣名称</th>
                    <th>价格</th>
                </tr>
                <tr>
                    <td>
                        从太平洋到大西洋，从洛杉矶到奥兰多的梦幻骑行之旅
                    </td>
                    <td>
                        <div class="discount_container"><span class="discount_before" dir="ltr">¥1,323.40/天</span>
                            <span class="discount_after">¥566.26<small>/天</small></span></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Active Police, Firemen, Military, and Veterans - 5% Off Your Next Rental *Available for USA Residents
                    </td>
                    <td>
                        <div class="discount_container"><span class="discount_percentage">5% <small>折扣</small></span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Get Out and Ride Mid-Week Special
                    </td>
                    <td>
                        <div class="discount_container"><span class="discount_before" dir="ltr">¥1,075.26/天</span>
                            <span class="discount_after">¥629.89<small>/天</small></span></div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="section_btns">
                <a href='#' class="btn-darkHighlight">
                    查看促销特惠<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="span4 membership-ads js-membershipPromotion">
            <h2>
                每个月骑一辆新车
            </h2>

            <a href="motorcycle-club.html">
                <img src="/public/image/membership-ad-9112a9cffe4b39259dc87b286c0e1a0b.jpg" />
                <div class="membership-ad-text">
                    <h3> Join Club EagleRider</h3>
                    <p>Only $29 per month (Yearly Term) <span class="right"> Join Today</span></p>
                </div>
            </a>

        </div>
    </div>
</div>

<div class="bot_section psection">
    <div class="container">
        <div class="row">
            <div class="span12 er-about">
                <h1>
                    鹰骑摩托车
                    <em>租赁和旅游</em>
                </h1>
                <div class="row">
                    <p>1992年，鹰骑率先倡导了摩托车租赁概念和摩托车团队旅游服务。如今，我们已经成为全球最大的摩托车旅游服务公司，提供最新最全的哈雷戴维森、印第安、凯旋、BMW，和本田摩托车，同时我们也提供全地形车（ATV）、轻型摩托车和踏板摩托车租赁服务。&nbsp;</p>
                    <p>鹰骑了解摩托车热爱者和冒险旅行者的需求。我们的旅行项目还遍布于世界各地的100多个著名景点。区别于其他租赁商的是，在我们的门店，备有多款最受欢迎的旅行摩托车，如 Indian Chief Vintage，Indian Chieftain，哈雷至尊滑翔，街道滑翔，公路滑翔，肥仔，和继承者软尾等。您将会在我们的鹰骑门店享受到最贴心的摩托车租赁一站式服务。</p>
                    <p>我们的大部分门店都提供以下服务：</p>
                    <ul>
                        <li>根据实际情况提供酒店及机场的免费接送服务</li>
                        <li>带锁的行李存储空间</li>
                        <li>免费停车</li>
                        <li>摩托车服务</li>
                        <li>摩托车服装和配件销售</li>
                    </ul>
                    <p>在北美的各大鹰骑门店，我们都可以为驾驶员和乘客提供DOT认证的摩托车头盔。</p>
                    <p>鹰骑旨在每一天都为顾客提供高质量的服务。我们不只为顾客提供摩托车，更可以为顾客带来非一般的体验。如果您想要感受世界奇观，享受自由带来的快感，或是想完成生命中的一项使命，那么，鹰骑正是您最好的选择。当您在鹰骑找寻到您最心爱的摩托车的那一刻，您的冒险旅程已经开启。</p>
                </div>
            </div>
        </div>
    </div>
</div>