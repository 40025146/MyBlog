<?php
/**
 * @author      OA Wu <panda0909@gmail.com>
 * @copyright   Copyright (c) 2014 OA Wu Design
 */

/* 網站上、右、下方的資訊內容 */

  /* 網頁上方的導航 bar */
  $_nav_items = array (
    'facebook' => array (
      'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><path d="M16.45 1.4h-12.9c-1.182 0-2.15 0.968-2.15 2.15v12.9c0 1.183 0.968 2.149 2.149 2.149h6.524v-6.167h-2.060v-2.686h2.060v-1.346c0-2.075 1.532-3.7 3.488-3.7h1.898v3.034h-1.699c-0.444 0-0.574 0.255-0.574 0.607v1.404h2.273v2.687h-2.273v6.168h3.263c1.183 0 2.149-0.967 2.149-2.149v-12.901c0.002-1.182-0.965-2.15-2.148-2.15z" fill="#000000"></path></svg>',
      'href' => 'https://www.facebook.com/panda0909',
      'title' => "Panda's facebook",
      'target' => '_blank'
    ),
    'github' => array (
      'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="415px" height="414.996px" viewBox="0 0 415 414.996" enable-background="new 0 0 415 414.996" xml:space="preserve"><path d="M331.312,86.24c-33.747-33.745-74.246-50.62-122.165-50.62c-47.922,0-88.421,16.875-122.17,50.62 c-33.748,33.749-50.622,74.247-50.622,122.172c0,47.921,16.874,88.419,50.622,122.168c33.749,33.744,74.248,50.621,122.17,50.621 c47.919,0,88.418-16.877,122.165-50.621c33.746-33.749,50.624-74.247,50.624-122.168C381.937,160.487,365.059,119.989,331.312,86.24 z M265.842,342.053c-4.749,1.965-8.775,3.377-13.5,4.727v-25.65c0-13.499-4.725-23.625-14.171-30.375 c37.119-2.7,77.618-17.55,77.618-81.67c0-17.549-5.399-32.398-16.874-44.547c4.725-13.5,4.05-28.35-2.024-43.872l-4.05-0.677 c-5.369-0.893-22.275,4.727-41.174,17.549c-13.496-4.05-27.674-6.073-41.845-6.073c-14.174,0-28.349,2.023-41.174,6.073 c-33.072-20.922-45.222-17.549-45.897-16.872c-6.074,15.522-6.749,30.372-2.024,43.872c-11.476,12.149-16.874,26.999-16.874,44.547 c0,64.12,40.497,78.97,77.621,81.67c-8.775,6.076-13.5,16.199-13.5,30.375v26.323c-5.399-1.35-10.775-3.435-15.523-5.399 c-34.402-14.234-62.441-42.662-76.946-76.947c-15.194-35.912-15.194-77.479,0-113.391c14.505-34.285,42.66-62.441,76.946-76.947 c35.914-15.193,77.478-15.193,113.392,0c34.286,14.506,62.441,42.662,76.946,76.947c15.193,35.912,15.193,77.479,0,113.391 C328.283,299.391,300.24,327.818,265.842,342.053z"/></svg>',
      'href' => 'https://github.com/40025146',
      'title' => "Panda's github",
      'target' => '_blank'
    ),
    'youtube' => array (
      'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="415px" height="414.996px" viewBox="0 0 415 414.996" enable-background="new 0 0 415 414.996" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M236.78,322.65c-46.408,0-92.812,0.295-139.217-0.125 c-23.334-0.208-33.082-7.57-39.811-31.131c-10.636-37.233-10.367-75.513-7.312-113.671c1.294-16.17,3.948-32.548,8.583-48.058 c6.328-21.197,16.607-28.108,38.571-28.221c75.316-0.384,150.631-0.611,225.944-0.336c26.859,0.1,38.386,8.596,44.057,34.539 c11.088,50.738,11.146,101.953,0.052,152.697c-5.659,25.889-17.019,33.966-44.108,34.494c-28.916,0.566-57.848,0.128-86.772,0.128 C236.771,322.862,236.773,322.757,236.78,322.65z M179.244,273.015c32.441-20.919,62.257-40.144,94.993-61.251 c-32.936-21.287-62.751-40.561-94.993-61.399C179.244,192.257,179.244,230.626,179.244,273.015z"/></svg>',
      'href' => 'https://www.youtube.com/channel/UCjFtkrBCSzXtRduwxXnCChA',
      'title' => "Panda's youtube",
      'target' => '_blank'
    )
  );

  /* 網頁右方的 widget */
  $_pins = array (
    'owner_info' => array (
      'avatar' => 'https://graph.facebook.com/732250603508804/picture?width=100&height=100',
      'name'   => '潘泓銘(Panda)',
      'href'   => '',
      'info_1' => '40025146@gm.nfu.edu.tw',
      'info_2' => '職業: Web技術 工程師',
      'info_3' => '生日: 1992/09/09'
    ),
    'tree' => array (
      'title'   => "Panda's Date Tree"
    ),
    'tags' => array (
      'title'   => "Panda's Tags"
    )
    // 'facebook' => array (
    //   'title'   => "Panda's Facebook",
    //   'content' => '<a href="https://www.facebook.com/panda0909" title="&#x5433;&#x653f;&#x8ce2;" target="_TOP"><img class="img" src="https://badge.facebook.com/badge/100000100541088.2769.32453715.png" style="border: 0px;" alt="" /></a>'
    // )
  );

  /* 網頁下方的資訊 */
  $_footer = array (
    "title" => "Panda's Blog © 2014",
    'content' => "如有 <u>相關問題</u> 歡迎來信 <b>40025146@gm.nfu.edu.tw</b> 或至 <a href='https://www.facebook.com/panda0909' target='_blank'>作者臉書</a> 留言。"
  );

  /* 手機檢視 網頁上方的導航 bar */
  $_navbar_mobile = array (
    'title' => "Panda's blog",
    'avatar' => 'https://graph.facebook.com/732250603508804/picture?width=100&height=100',
  );

  /* 手機檢視 右邊選單 */
  $_mobile_right_slides = array (
    'info' =>  array (
      'title' => "Panda's Info",
      'items' => array (
        array ('value' => '40025146@gm.nfu.edu.tw', 'class' => 'shimmer', 'link' => array ()),
        array ('value' => '職業: Web技術 工程師', 'class' => 'shimmer', 'link' => array ()),
        array ('value' => '生日: 1992/09/09', 'class' => 'shimmer', 'link' => array ())
      )
    ),
    'other' => array (
      'tags' => array (
        'title' => "Panda's Tags",
      )
    ),
    'link' => array (
      'title' => "Panda's Link",
      'items' => array (
        array (
          'value' => 'Facebook',
          'class' => '',
          'link' => array (
            'href' => 'https://www.facebook.com/panda0909',
            'title' => "Panda's facebook",
            'target' => '_blank'
        )),
        array (
          'value' => 'GitHub',
          'class' => '',
          'link' => array (
            'href' => 'https://github.com/40025146',
            'title' => "Panda's github",
            'target' => '_blank'
        )),
        array (
          'value' => 'youtube',
          'class' => '',
          'link' => array (
            'href' => 'https://www.youtube.com/user/panda0909',
            'title' => "Panda's youtube",
            'target' => '_blank'
        ))
      )
    )
  );
