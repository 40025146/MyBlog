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
      'href' => 'https://github.com/panda0909',
      'title' => "Panda's github",
      'target' => '_blank'
    ),
    'linkedin' => array (
      'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="415px" height="414.996px" viewBox="0 0 415 414.996" enable-background="new 0 0 415 414.996" xml:space="preserve"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M107.855,132.377c19.812,0,32.15-13.141,32.15-29.546 c-0.369-16.771-12.338-29.54-31.771-29.54c-19.441,0-32.15,12.769-32.15,29.54c0,16.405,12.334,29.546,31.402,29.546H107.855 L107.855,132.377z M136.27,326.683V155.711H79.443v170.972H136.27z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M167.715,326.683h56.826v-95.479c0-5.108,0.369-10.217,1.871-13.863 c4.109-10.213,13.457-20.788,29.156-20.788c20.568,0,28.787,15.683,28.787,38.664v91.466h56.826V228.65 c0-52.514-28.033-76.952-65.426-76.952c-30.658,0-44.117,17.139-51.59,28.81h0.375v-24.797h-56.826 C168.461,171.75,167.715,326.683,167.715,326.683L167.715,326.683z"/></g></svg>',
      'href' => 'https://www.flickr.com/panda0909',
      'title' => "Panda's flickr",
      'target' => '_blank'
    ),
    'youtube' => array (
      'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="415px" height="414.996px" viewBox="0 0 415 414.996" enable-background="new 0 0 415 414.996" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M236.78,322.65c-46.408,0-92.812,0.295-139.217-0.125 c-23.334-0.208-33.082-7.57-39.811-31.131c-10.636-37.233-10.367-75.513-7.312-113.671c1.294-16.17,3.948-32.548,8.583-48.058 c6.328-21.197,16.607-28.108,38.571-28.221c75.316-0.384,150.631-0.611,225.944-0.336c26.859,0.1,38.386,8.596,44.057,34.539 c11.088,50.738,11.146,101.953,0.052,152.697c-5.659,25.889-17.019,33.966-44.108,34.494c-28.916,0.566-57.848,0.128-86.772,0.128 C236.771,322.862,236.773,322.757,236.78,322.65z M179.244,273.015c32.441-20.919,62.257-40.144,94.993-61.251 c-32.936-21.287-62.751-40.561-94.993-61.399C179.244,192.257,179.244,230.626,179.244,273.015z"/></svg>',
      'href' => 'https://www.youtube.com/user/panda0909',
      'title' => "Panda's youtube",
      'target' => '_blank'
    ),
    'google+' => array (
      'svg' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16"><path d="M0.013 13.588c-0.004-0.040-0.007-0.079-0.009-0.119 0.002 0.040 0.005 0.080 0.009 0.119zM3.686 8.83c1.438 0.043 2.402-1.448 2.154-3.331s-1.616-3.393-3.053-3.436c-1.438-0.043-2.402 1.398-2.154 3.281s1.615 3.443 3.053 3.486zM16 4v-1.333c0-1.467-1.2-2.667-2.667-2.667h-10.666c-1.442 0-2.625 1.16-2.665 2.593 0.912-0.803 2.177-1.474 3.482-1.474 1.395 0 5.582 0 5.582 0l-1.249 1.057h-1.77c1.174 0.45 1.799 1.814 1.799 3.214 0 1.176-0.653 2.187-1.576 2.906-0.901 0.702-1.071 0.995-1.071 1.592 0 0.509 0.965 1.375 1.469 1.731 1.475 1.040 1.952 2.005 1.952 3.617 0 0.257-0.032 0.513-0.095 0.765h4.808c1.467 0 2.666-1.199 2.666-2.667v-8.333h-3v3h-1v-3h-3v-1h3v-3h1v3h3zM2.904 11.968c0.338 0 0.647-0.009 0.968-0.009-0.424-0.411-0.76-0.916-0.76-1.537 0-0.369 0.118-0.724 0.283-1.039-0.168 0.012-0.34 0.016-0.518 0.016-1.162 0-2.149-0.376-2.878-0.998v1.051l0 3.152c0.835-0.396 1.826-0.635 2.904-0.635zM0.053 13.863c-0.017-0.085-0.031-0.172-0.040-0.26 0.009 0.088 0.022 0.175 0.040 0.26zM7.116 14.888c-0.235-0.919-1.070-1.374-2.233-2.181-0.423-0.136-0.889-0.217-1.389-0.222-1.4-0.015-2.705 0.546-3.441 1.381 0.249 1.214 1.329 2.134 2.613 2.134h4.476c0.028-0.174 0.042-0.354 0.042-0.538 0-0.196-0.024-0.387-0.068-0.574z" fill="#000000"></path></svg>',
      'href' => 'https://plus.google.com/u/0/吳政賢/posts',
      'title' => "Panda's google+",
      'target' => '_blank'
    )
  );

  /* 網頁右方的 widget */
  $_pins = array (
    'owner_info' => array (
      'avatar' => 'https://graph.facebook.com/100000100541088/picture?width=100&height=100',
      'name'   => '潘泓銘(Panda)',
      'href'   => '',
      'info_1' => 'panda0909@gmail.com',
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
    'content' => "如有 <u>相關問題</u> 歡迎來信 <b>panda0909@gmail.com</b> 或至 <a href='https://www.facebook.com/panda0909' target='_blank'>作者臉書</a> 留言。"
  );

  /* 手機檢視 網頁上方的導航 bar */
  $_navbar_mobile = array (
    'title' => "Panda's blog",
    'avatar' => 'https://graph.facebook.com/100000100541088/picture?width=100&height=100',
  );

  /* 手機檢視 右邊選單 */
  $_mobile_right_slides = array (
    'info' =>  array (
      'title' => "Panda's Info",
      'items' => array (
        array ('value' => 'panda0909@gmail.com', 'class' => 'shimmer', 'link' => array ()),
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
            'href' => 'https://github.com/panda0909',
            'title' => "Panda's github",
            'target' => '_blank'
        )),
        array (
          'value' => 'flickr',
          'class' => '',
          'link' => array (
            'href' => 'https://www.flickr.com/panda0909',
            'title' => "Panda's flickr",
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
