<?php

return array(
    'langEng' => '{"type":"segment","segmentId":"s300000938_57924078e4b05f8496f06d63"},',
    'langFra' => '{"type":"segment","segmentId":"s300000938_579240a6e4b00bd9617283bd"},',
    'pltfrm' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"1","id":"metrics/visits","sort":"desc","filters":["0"]},{"columnId":"2","id":"metrics/visits","filters":["1"]},{"columnId":"3","id":"metrics/visits","filters":["2"]},{"columnId":"4","id":"metrics/visits","filters":["3"]}],"metricFilters":[{"id":"0","type":"segment","segmentId":"s300000938_5d2f4947546d675d29e8817b"},{"id":"1","type":"segment","segmentId":"s300000938_5e0e240f1212e638f4382d0d"},{"id":"2","type":"segment","segmentId":"s300000938_5e0e2426b81a6c715e018e90"},{"id":"3","type":"segment","segmentId":"s300000938_5c6d65e5cfb25208c24ebcd1"}]},"dimension":"variables/evar22","search":{"clause":"( %s \'%s\' )"},"settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'trnd' => '{"rsid":"canadalivemain","globalFilters":[%s{"type":"segment","segmentDefinition":{"container":{"func":"container","context":"hits","pred":{"func":"%s","str":"%s","val":{"func":"attr","name":"variables/evar22"},"description":"Page URL Last 255 Chars (v22)"}},"func":"segment","version":[1,0,0]}},{"type":"dateRange","dateRange":"2020-08-02T00:00:00.000/2020-08-09T00:00:00.000"}],"metricContainer":{"metrics":[{"columnId":"1","id":"metrics/visits","filters":["0"]}],"metricFilters":[{"id":"0","type":"dateRange","dateRange":"%s/%s"}]},"dimension":"variables/daterangeday","settings":{"countRepeatInstances":true,"limit":400,"page":0,"dimensionSort":"asc","nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'trndB' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[',
    'trndMA1' => '{"columnId":"%s","id":"metrics/visits","filters":["%s"]},',
    'trndMS' => '],"metricFilters":[',
    'trndMA2' => '{"id":"%s","type":"dateRange","dateRange":"%s"},',
    'trndE' => ']},"dimension":"variables/evar22","search":{"clause":"( %s \'%s\' )"},"settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'activityMap' => '{"rsid":"canadalivemain","globalFilters":[{"type":"segment","segmentDefinition":{"container":{"func":"container","context":"hits","pred":{"func":"streq","str":"%s","val":{"func":"attr","name":"variables/clickmappage"},"description":"Activity Map Page"}},"func":"segment","version":[1,0,0]}},{"type":"dateRange","dateRange":"2020-05-01T00:00:00.000/2020-06-01T00:00:00.000"}],"metricContainer":{"metrics":[{"columnId":"1","id":"metrics/clickmaplinkinstances","filters":["0"]},{"columnId":"2","id":"metrics/clickmaplinkinstances","filters":["1"]},{"columnId":"3","id":"metrics/clickmaplinkinstances","sort":"desc","filters":["2"]}],"metricFilters":[{"id":"0","type":"dateRange","dateRange":"%s/2020-05-16T00:00:00.000"},{"id":"1","type":"dateRange","dateRange":"%s/2020-05-16T00:00:00.000"},{"id":"2","type":"dateRange","dateRange":"%s/2020-05-16T00:00:00.000"}]},"dimension":"variables/clickmaplink","settings":{"countRepeatInstances":true,"limit":25,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'fwylf' => '{"rsid":"canadalivemain","globalFilters":[{"type":"segment","segmentDefinition":{"container":{"func":"container","context":"hits","pred":{"func":"streq","str":"%s","val":{"func":"attr","name":"variables/evar22"},"description":"Page URL Last 255 Chars (v22)"}},"func":"segment","version":[1,0,0]}},{"type":"dateRange","dateRange":"2020-06-01T00:00:00.000/2020-07-01T00:00:00.000"}],"metricContainer":{"metrics":[{"columnId":"1","id":"metrics/evar80instances","sort":"desc","filters":["0"]}],"metricFilters":[{"id":"0","type":"dateRange","dateRange":"2021-05-01T00:00:00.000/2021-06-01T00:00:00.000"}]},"dimension":"variables/evar80","settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'metrics' => '{"rsid":"canadalivemain","globalFilters":[{"type":"segment","segmentDefinition":{"container":{"func":"container","context":"hits","pred":{"func":"streq","str":"%s","val":{"func":"attr","name":"variables/evar22"},"description":"Page URL Last 255 Chars (v22)"}},"func":"segment","version":[1,0,0]}},{"type":"dateRange","dateRange":"2021-06-01T00:00:00.000/2021-07-01T00:00:00.000"}],"metricContainer":{"metrics":[{"columnId":"metrics/visits:::0","id":"metrics/visits","filters":["0"]},{"columnId":"metrics/visitors:::1","id":"metrics/visitors","filters":["1"]},{"columnId":"metrics/pageviews:::2","id":"metrics/pageviews","filters":["2"]},{"columnId":"cm300000938_5ec603c086fd4d00d83b4adb:::3","id":"cm300000938_5ec603c086fd4d00d83b4adb","filters":["3"]},{"columnId":"cm300000938_5cdec38e25323e0c7cbb060a:::4","id":"cm300000938_5cdec38e25323e0c7cbb060a","filters":["4"]},{"columnId":"cm300000938_5ec605734c546630df64a183:::5","id":"cm300000938_5ec605734c546630df64a183","filters":["5"]},{"columnId":"cm300000938_5ec6041b4c546630df64a161:::6","id":"cm300000938_5ec6041b4c546630df64a161","filters":["6"]}],"metricFilters":[{"id":"0","type":"dateRange","dateRange":"2021-05-01T00:00:00.000/2021-06-01T00:00:00.000"},{"id":"1","type":"dateRange","dateRange":"2021-05-01T00:00:00.000/2021-06-01T00:00:00.000"},{"id":"2","type":"dateRange","dateRange":"2021-05-01T00:00:00.000/2021-06-01T00:00:00.000"},{"id":"3","type":"dateRange","dateRange":"2021-05-01T00:00:00.000/2021-06-01T00:00:00.000"},{"id":"4","type":"dateRange","dateRange":"2021-05-01T00:00:00.000/2021-06-01T00:00:00.000"},{"id":"5","type":"dateRange","dateRange":"2021-05-01T00:00:00.000/2021-06-01T00:00:00.000"},{"id":"6","type":"dateRange","dateRange":"2021-05-01T00:00:00.000/2021-06-01T00:00:00.000"}]},"settings":{"countRepeatInstances":true,"dimensionSort":"dsc"},"statistics":{"functions":["col-max","col-min"]}}'
);

?>
