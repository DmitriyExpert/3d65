(function(){
var translateObjs = {};
function trans(c, d) {
    var e = arguments['length'] === 0x1 ? [arguments[0x0]] : Array['apply'](null, arguments);
    translateObjs[e[0x0]] = e;
    return '';
}
function regTextVar(f, g) {
    var h = ![];
    g = g['toLowerCase']();
    var i = function () {
        var r = this['get']('data');
        r['updateText'](r['translateObjs'][f]);
    };
    var j = function (s) {
        var t = s['data']['nextSelectedIndex'];
        if (t >= 0x0) {
            var u = s['source']['get']('items')[t];
            var v = function () {
                u['unbind']('start', v, this);
                i['call'](this);
            };
            u['bind']('start', v, this);
        } else
            i['call'](this);
    };
    var k = function (w) {
        return function (x) {
            if (w in x) {
                i['call'](this);
            }
        }['bind'](this);
    };
    var l = function (y, z) {
        return function (A, B) {
            if (y == A && z in B) {
                i['call'](this);
            }
        }['bind'](this);
    };
    var m = function (C, D, E) {
        for (var F = 0x0; F < C['length']; ++F) {
            var G = C[F];
            var H = G['get']('selectedIndex');
            if (H >= 0x0) {
                var I = D['split']('.');
                var J = G['get']('items')[H];
                if (E !== undefined && !E['call'](this, J))
                    continue;
                for (var K = 0x0; K < I['length']; ++K) {
                    if (J == undefined)
                        return '';
                    J = 'get' in J ? J['get'](I[K]) : J[I[K]];
                }
                return J;
            }
        }
        return '';
    };
    var n = function (L) {
        var M = L['get']('player');
        return M !== undefined && M['get']('viewerArea') == this['getMainViewer']();
    };
    switch (g) {
    case 'title':
    case 'subtitle':
        var p = function () {
            switch (g) {
            case 'title':
                return 'media.label';
            case 'subtitle':
                return 'media.data.subtitle';
            }
        }();
        if (p) {
            return function () {
                var N = this['_getPlayListsWithViewer'](this['getMainViewer']());
                if (!h) {
                    for (var O = 0x0; O < N['length']; ++O) {
                        N[O]['bind']('changing', j, this);
                    }
                    h = !![];
                }
                return m['call'](this, N, p, n);
            };
        }
        break;
    default:
        if (g['startsWith']('quiz.') && 'Quiz' in TDV) {
            var q = undefined;
            var p = function () {
                switch (g) {
                case 'quiz.questions.answered':
                    return TDV['Quiz']['PROPERTY']['QUESTIONS_ANSWERED'];
                case 'quiz.question.count':
                    return TDV['Quiz']['PROPERTY']['QUESTION_COUNT'];
                case 'quiz.items.found':
                    return TDV['Quiz']['PROPERTY']['ITEMS_FOUND'];
                case 'quiz.item.count':
                    return TDV['Quiz']['PROPERTY']['ITEM_COUNT'];
                case 'quiz.score':
                    return TDV['Quiz']['PROPERTY']['SCORE'];
                case 'quiz.score.total':
                    return TDV['Quiz']['PROPERTY']['TOTAL_SCORE'];
                case 'quiz.time.remaining':
                    return TDV['Quiz']['PROPERTY']['REMAINING_TIME'];
                case 'quiz.time.elapsed':
                    return TDV['Quiz']['PROPERTY']['ELAPSED_TIME'];
                case 'quiz.time.limit':
                    return TDV['Quiz']['PROPERTY']['TIME_LIMIT'];
                case 'quiz.media.items.found':
                    return TDV['Quiz']['PROPERTY']['PANORAMA_ITEMS_FOUND'];
                case 'quiz.media.item.count':
                    return TDV['Quiz']['PROPERTY']['PANORAMA_ITEM_COUNT'];
                case 'quiz.media.questions.answered':
                    return TDV['Quiz']['PROPERTY']['PANORAMA_QUESTIONS_ANSWERED'];
                case 'quiz.media.question.count':
                    return TDV['Quiz']['PROPERTY']['PANORAMA_QUESTION_COUNT'];
                case 'quiz.media.score':
                    return TDV['Quiz']['PROPERTY']['PANORAMA_SCORE'];
                case 'quiz.media.score.total':
                    return TDV['Quiz']['PROPERTY']['PANORAMA_TOTAL_SCORE'];
                case 'quiz.media.index':
                    return TDV['Quiz']['PROPERTY']['PANORAMA_INDEX'];
                case 'quiz.media.count':
                    return TDV['Quiz']['PROPERTY']['PANORAMA_COUNT'];
                case 'quiz.media.visited':
                    return TDV['Quiz']['PROPERTY']['PANORAMA_VISITED_COUNT'];
                default:
                    var P = /quiz\.([\w_]+)\.(.+)/['exec'](g);
                    if (P) {
                        q = P[0x1];
                        switch ('quiz.' + P[0x2]) {
                        case 'quiz.score':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['SCORE'];
                        case 'quiz.score.total':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['TOTAL_SCORE'];
                        case 'quiz.media.items.found':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_ITEMS_FOUND'];
                        case 'quiz.media.item.count':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_ITEM_COUNT'];
                        case 'quiz.media.questions.answered':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_QUESTIONS_ANSWERED'];
                        case 'quiz.media.question.count':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_QUESTION_COUNT'];
                        case 'quiz.questions.answered':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['QUESTIONS_ANSWERED'];
                        case 'quiz.question.count':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['QUESTION_COUNT'];
                        case 'quiz.items.found':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['ITEMS_FOUND'];
                        case 'quiz.item.count':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['ITEM_COUNT'];
                        case 'quiz.media.score':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_SCORE'];
                        case 'quiz.media.score.total':
                            return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_TOTAL_SCORE'];
                        }
                    }
                }
            }();
            if (p) {
                return function () {
                    var Q = this['get']('data')['quiz'];
                    if (Q) {
                        if (!h) {
                            if (q != undefined)
                                if (q == 'global') {
                                    var S = this['get']('data')['quizConfig'];
                                    var U = S['objectives'];
                                    for (var W = 0x0, Y = U['length']; W < Y; ++W) {
                                        Q['bind'](TDV['Quiz']['EVENT_OBJECTIVE_PROPERTIES_CHANGE'], l['call'](this, U[W]['id'], p), this);
                                    }
                                } else {
                                    Q['bind'](TDV['Quiz']['EVENT_OBJECTIVE_PROPERTIES_CHANGE'], l['call'](this, q, p), this);
                                }
                            else
                                Q['bind'](TDV['Quiz']['EVENT_PROPERTIES_CHANGE'], k['call'](this, p), this);
                            h = !![];
                        }
                        try {
                            var Z = 0x0;
                            if (q != undefined) {
                                if (q == 'global') {
                                    var S = this['get']('data')['quizConfig'];
                                    var U = S['objectives'];
                                    for (var W = 0x0, Y = U['length']; W < Y; ++W) {
                                        Z += Q['getObjective'](U[W]['id'], p);
                                    }
                                } else {
                                    Z = Q['getObjective'](q, p);
                                }
                            } else {
                                Z = Q['get'](p);
                                if (p == TDV['Quiz']['PROPERTY']['PANORAMA_INDEX'])
                                    Z += 0x1;
                            }
                            return Z;
                        } catch (a0) {
                            return undefined;
                        }
                    }
                };
            }
        }
        break;
    }
    return '';
}
function createQuizConfig(player, a1) {
    var a2 = {};
    a2['player'] = player;
    a2['playList'] = a1;
    function a3(a6) {
        for (var a7 = 0x0; a7 < a6['length']; ++a7) {
            var a8 = a6[a7];
            if ('id' in a8)
                player[a8['id']] = a8;
        }
    }
    if (a2['questions']) {
        a3(a2['questions']);
        for (var a4 = 0x0; a4 < a2['questions']['length']; ++a4) {
            var a5 = a2['questions'][a4];
            a3(a5['options']);
        }
    }
    if (a2['objectives']) {
        a3(a2['objectives']);
    }
    if (a2['califications']) {
        a3(a2['califications']);
    }
    if (a2['score']) {
        player[a2['score']['id']] = a2['score'];
    }
    if (a2['question']) {
        player[a2['question']['id']] = a2['question'];
    }
    if (a2['timeout']) {
        player[a2['timeout']['id']] = a2['timeout'];
    }
    player['get']('data')['translateObjs'] = translateObjs;
    return a2;
}
var script = {"desktopMipmappingEnabled":false,"borderSize":0,"data":{"defaultLocale":"ru","initialScale":0.5,"name":"Player475","locales":{"ru":"locale/ru.txt"},"textToSpeechConfig":{"speechOnTooltip":false,"speechOnQuizQuestion":false,"volume":1,"speechOnInfoWindow":false,"stopBackgroundAudio":false,"pitch":1,"rate":1}},"borderRadius":0,"gap":10,"scrollBarVisible":"rollOver","contentOpaque":false,"layout":"absolute","overflow":"hidden","class":"Player","paddingTop":0,"mouseWheelEnabled":true,"paddingLeft":0,"paddingBottom":0,"id":"rootPlayer","toolTipHorizontalAlign":"center","mobileMipmappingEnabled":false,"backgroundOpacity":1,"scrollBarWidth":10,"horizontalAlign":"left","backgroundColorDirection":"vertical","paddingRight":0,"backgroundPreloadEnabled":true,"defaultMenu":["fullscreen","mute","rotation"],"width":"100%","children":["this.MainViewer","this.ThumbnailList_54AF0828_5A33_69A0_41BD_37E00EBA3E67","this.IconButton_5572B1E0_5A31_3ADF_41CD_0EECF733CC16","this.Container_6772724D_6A3B_57AB_41D8_C0A9B50F32B8","this.veilPopupPanorama","this.zoomImagePopupPanorama","this.closeButtonPopupPanorama"],"scrollBarOpacity":0.5,"mediaActivationMode":"window","verticalAlign":"top","backgroundColor":["#FFFFFF"],"scrollBarMargin":2,"creationPolicy":"inAdvance","height":"100%","vrPolyfillScale":0.5,"scrollBarColor":"#000000","scripts":{"getAudioByTags":TDV.Tour.Script.getAudioByTags,"mixObject":TDV.Tour.Script.mixObject,"playGlobalAudioWhilePlayActiveMedia":TDV.Tour.Script.playGlobalAudioWhilePlayActiveMedia,"assignObjRecursively":TDV.Tour.Script.assignObjRecursively,"updateDeepLink":TDV.Tour.Script.updateDeepLink,"resumeGlobalAudios":TDV.Tour.Script.resumeGlobalAudios,"quizFinish":TDV.Tour.Script.quizFinish,"getComponentsByTags":TDV.Tour.Script.getComponentsByTags,"getPanoramaOverlayByName":TDV.Tour.Script.getPanoramaOverlayByName,"executeFunctionWhenChange":TDV.Tour.Script.executeFunctionWhenChange,"getMediaHeight":TDV.Tour.Script.getMediaHeight,"changeBackgroundWhilePlay":TDV.Tour.Script.changeBackgroundWhilePlay,"setMediaBehaviour":TDV.Tour.Script.setMediaBehaviour,"setEndToItemIndex":TDV.Tour.Script.setEndToItemIndex,"getPlayListItems":TDV.Tour.Script.getPlayListItems,"getKey":TDV.Tour.Script.getKey,"skip3DTransitionOnce":TDV.Tour.Script.skip3DTransitionOnce,"playGlobalAudioWhilePlay":TDV.Tour.Script.playGlobalAudioWhilePlay,"_initSplitViewer":TDV.Tour.Script._initSplitViewer,"getMediaWidth":TDV.Tour.Script.getMediaWidth,"setComponentVisibility":TDV.Tour.Script.setComponentVisibility,"showPopupPanoramaOverlay":TDV.Tour.Script.showPopupPanoramaOverlay,"changeOpacityWhilePlay":TDV.Tour.Script.changeOpacityWhilePlay,"_initTwinsViewer":TDV.Tour.Script._initTwinsViewer,"openLink":TDV.Tour.Script.openLink,"clone":TDV.Tour.Script.clone,"stopGlobalAudio":TDV.Tour.Script.stopGlobalAudio,"updateVideoCues":TDV.Tour.Script.updateVideoCues,"getActivePlayerWithViewer":TDV.Tour.Script.getActivePlayerWithViewer,"setStartTimeVideoSync":TDV.Tour.Script.setStartTimeVideoSync,"sendAnalyticsData":TDV.Tour.Script.sendAnalyticsData,"init":TDV.Tour.Script.init,"getMediaFromPlayer":TDV.Tour.Script.getMediaFromPlayer,"quizSetItemFound":TDV.Tour.Script.quizSetItemFound,"getPlayListItemIndexByMedia":TDV.Tour.Script.getPlayListItemIndexByMedia,"setMapLocation":TDV.Tour.Script.setMapLocation,"showPopupPanoramaVideoOverlay":TDV.Tour.Script.showPopupPanoramaVideoOverlay,"openEmbeddedPDF":TDV.Tour.Script.openEmbeddedPDF,"pauseGlobalAudios":TDV.Tour.Script.pauseGlobalAudios,"getPlayListItemByMedia":TDV.Tour.Script.getPlayListItemByMedia,"isPanorama":TDV.Tour.Script.isPanorama,"copyToClipboard":TDV.Tour.Script.copyToClipboard,"setSurfaceSelectionHotspotMode":TDV.Tour.Script.setSurfaceSelectionHotspotMode,"existsKey":TDV.Tour.Script.existsKey,"getMainViewer":TDV.Tour.Script.getMainViewer,"showWindow":TDV.Tour.Script.showWindow,"getFirstPlayListWithMedia":TDV.Tour.Script.getFirstPlayListWithMedia,"pauseGlobalAudio":TDV.Tour.Script.pauseGlobalAudio,"stopGlobalAudios":TDV.Tour.Script.stopGlobalAudios,"getMediaByName":TDV.Tour.Script.getMediaByName,"downloadFile":TDV.Tour.Script.downloadFile,"getOverlaysByGroupname":TDV.Tour.Script.getOverlaysByGroupname,"pauseGlobalAudiosWhilePlayItem":TDV.Tour.Script.pauseGlobalAudiosWhilePlayItem,"syncPlaylists":TDV.Tour.Script.syncPlaylists,"updateMediaLabelFromPlayList":TDV.Tour.Script.updateMediaLabelFromPlayList,"setOverlaysVisibility":TDV.Tour.Script.setOverlaysVisibility,"getCurrentPlayerWithMedia":TDV.Tour.Script.getCurrentPlayerWithMedia,"executeAudioActionByTags":TDV.Tour.Script.executeAudioActionByTags,"cloneCamera":TDV.Tour.Script.cloneCamera,"unregisterKey":TDV.Tour.Script.unregisterKey,"startPanoramaWithCamera":TDV.Tour.Script.startPanoramaWithCamera,"visibleComponentsIfPlayerFlagEnabled":TDV.Tour.Script.visibleComponentsIfPlayerFlagEnabled,"_getObjectsByTags":TDV.Tour.Script._getObjectsByTags,"setComponentsVisibilityByTags":TDV.Tour.Script.setComponentsVisibilityByTags,"quizShowQuestion":TDV.Tour.Script.quizShowQuestion,"_getPlayListsWithViewer":TDV.Tour.Script._getPlayListsWithViewer,"_initTTSTooltips":TDV.Tour.Script._initTTSTooltips,"showPopupMedia":TDV.Tour.Script.showPopupMedia,"getRootOverlay":TDV.Tour.Script.getRootOverlay,"setMainMediaByIndex":TDV.Tour.Script.setMainMediaByIndex,"fixTogglePlayPauseButton":TDV.Tour.Script.fixTogglePlayPauseButton,"initAnalytics":TDV.Tour.Script.initAnalytics,"autotriggerAtStart":TDV.Tour.Script.autotriggerAtStart,"quizShowScore":TDV.Tour.Script.quizShowScore,"cloneBindings":TDV.Tour.Script.cloneBindings,"getMediaByTags":TDV.Tour.Script.getMediaByTags,"keepCompVisible":TDV.Tour.Script.keepCompVisible,"quizPauseTimer":TDV.Tour.Script.quizPauseTimer,"setStartTimeVideo":TDV.Tour.Script.setStartTimeVideo,"playGlobalAudio":TDV.Tour.Script.playGlobalAudio,"getComponentByName":TDV.Tour.Script.getComponentByName,"getPanoramaOverlaysByTags":TDV.Tour.Script.getPanoramaOverlaysByTags,"isCardboardViewMode":TDV.Tour.Script.isCardboardViewMode,"setValue":TDV.Tour.Script.setValue,"pauseCurrentPlayers":TDV.Tour.Script.pauseCurrentPlayers,"getCurrentPlayers":TDV.Tour.Script.getCurrentPlayers,"getPixels":TDV.Tour.Script.getPixels,"triggerOverlay":TDV.Tour.Script.triggerOverlay,"executeAudioAction":TDV.Tour.Script.executeAudioAction,"getPlayListWithItem":TDV.Tour.Script.getPlayListWithItem,"initOverlayGroupRotationOnClick":TDV.Tour.Script.initOverlayGroupRotationOnClick,"quizShowTimeout":TDV.Tour.Script.quizShowTimeout,"setCameraSameSpotAsMedia":TDV.Tour.Script.setCameraSameSpotAsMedia,"initQuiz":TDV.Tour.Script.initQuiz,"takeScreenshot":TDV.Tour.Script.takeScreenshot,"copyObjRecursively":TDV.Tour.Script.copyObjRecursively,"stopAndGoCamera":TDV.Tour.Script.stopAndGoCamera,"textToSpeech":TDV.Tour.Script.textToSpeech,"setPanoramaCameraWithCurrentSpot":TDV.Tour.Script.setPanoramaCameraWithCurrentSpot,"shareSocial":TDV.Tour.Script.shareSocial,"getOverlays":TDV.Tour.Script.getOverlays,"htmlToPlainText":TDV.Tour.Script.htmlToPlainText,"setLocale":TDV.Tour.Script.setLocale,"historyGoForward":TDV.Tour.Script.historyGoForward,"historyGoBack":TDV.Tour.Script.historyGoBack,"_initItemWithComps":TDV.Tour.Script._initItemWithComps,"quizResumeTimer":TDV.Tour.Script.quizResumeTimer,"registerKey":TDV.Tour.Script.registerKey,"loadFromCurrentMediaPlayList":TDV.Tour.Script.loadFromCurrentMediaPlayList,"playAudioList":TDV.Tour.Script.playAudioList,"setMainMediaByName":TDV.Tour.Script.setMainMediaByName,"resumePlayers":TDV.Tour.Script.resumePlayers,"showComponentsWhileMouseOver":TDV.Tour.Script.showComponentsWhileMouseOver,"setPanoramaCameraWithSpot":TDV.Tour.Script.setPanoramaCameraWithSpot,"getOverlaysByTags":TDV.Tour.Script.getOverlaysByTags,"setOverlayBehaviour":TDV.Tour.Script.setOverlayBehaviour,"getPlayListsWithMedia":TDV.Tour.Script.getPlayListsWithMedia,"executeJS":TDV.Tour.Script.executeJS,"getGlobalAudio":TDV.Tour.Script.getGlobalAudio,"stopTextToSpeech":TDV.Tour.Script.stopTextToSpeech,"quizStart":TDV.Tour.Script.quizStart,"setDirectionalPanoramaAudio":TDV.Tour.Script.setDirectionalPanoramaAudio,"showPopupImage":TDV.Tour.Script.showPopupImage,"setOverlaysVisibilityByTags":TDV.Tour.Script.setOverlaysVisibilityByTags,"textToSpeechComponent":TDV.Tour.Script.textToSpeechComponent,"getActiveMediaWithViewer":TDV.Tour.Script.getActiveMediaWithViewer,"translate":TDV.Tour.Script.translate,"changePlayListWithSameSpot":TDV.Tour.Script.changePlayListWithSameSpot},"definitions": [{"toolTipShadowHorizontalLength":0,"toolTipDisplayTime":600,"borderSize":0,"data":{"name":"\u041d\u0430 \u0432\u0435\u0441\u044c \u044d\u043a\u0440\u0430\u043d"},"toolTipTextShadowOpacity":0,"borderRadius":0,"toolTipFontSize":"12px","toolTipShadowColor":"#333333","width":48,"toolTipShadowVerticalLength":0,"toolTip":trans('IconButton_577E4353_5A11_1FE1_41C4_2ECC0A11012B.toolTip'),"toolTipBorderRadius":0,"class":"IconButton","paddingTop":0,"toolTipShadowBlurRadius":3,"cursor":"hand","paddingLeft":0,"toolTipFontFamily":"Arial","toolTipPaddingTop":2,"paddingBottom":0,"id":"IconButton_577E4353_5A11_1FE1_41C4_2ECC0A11012B","toolTipHorizontalAlign":"center","toolTipShadowOpacity":1,"toolTipFontColor":"#606060","toolTipBorderSize":0,"backgroundOpacity":0,"paddingRight":0,"transparencyActive":false,"horizontalAlign":"center","toolTipTextShadowColor":"#000000","toolTipFontWeight":"normal","toolTipOpacity":1,"toolTipPaddingLeft":4,"height":48,"verticalAlign":"middle","toolTipBorderColor":"#767676","maxHeight":48,"maxWidth":48,"toolTipPaddingBottom":2,"toolTipFontStyle":"normal","mode":"toggle","minHeight":48,"toolTipTextShadowBlurRadius":3,"minWidth":48,"shadow":false,"iconURL":"skin/IconButton_577E4353_5A11_1FE1_41C4_2ECC0A11012B.png","toolTipBackgroundColor":"#F6F6F6","toolTipShadowSpread":0,"toolTipPaddingRight":4,"propagateClick":false},{"initialPosition":{"class":"PanoramaCameraPosition","yaw":43.41,"pitch":-2.94},"hoverFactor":0,"id":"panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_camera","manualZoomSpeed":3,"automaticZoomSpeed":10,"class":"PanoramaCamera","automaticRotationSpeed":0},{"class":"PlayList","items":[{"class":"PanoramaPlayListItem","player":"this.MainViewerPanoramaPlayer","camera":"this.panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_camera","media":"this.panorama_9DE712F3_9001_2562_41C7_4BD2528CF168","begin":"this.setEndToItemIndex(this.mainPlayList, 0, 1)"},"this.PanoramaPlayListItem_95EDC16C_9951_F7F4_41CC_C6F2B3401C4C","this.PanoramaPlayListItem_95EDF16C_9951_F7F4_41CF_CF415B577BDE"],"id":"mainPlayList"},{"arrowKeysAction":"translate","mouseControlMode":"drag_rotation","surfaceSelectionEnabled":false,"viewerArea":"this.MainViewer","touchControlMode":"drag_rotation","aaEnabled":true,"displayPlaybackBar":true,"gyroscopeVerticalDraggingEnabled":true,"class":"PanoramaPlayer","zoomEnabled":true,"id":"MainViewerPanoramaPlayer"},{"levels":["this.imlevel_95F49051_9951_F52C_41D7_977C48CFA566"],"class":"ImageResource","id":"ImageResource_8213958C_9000_EFA5_41C6_847FB5CF4ADC"},{"class":"FadeInEffect","easing":"cubic_in","duration":500,"id":"FadeInEffect_8213B58C_9000_EFA5_41CA_329ACCE9AB66"},{"class":"PlayList","items":[{"player":"this.MainViewerPanoramaPlayer","class":"PanoramaPlayListItem","camera":"this.panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_camera","media":"this.panorama_9DE712F3_9001_2562_41C7_4BD2528CF168"},{"player":"this.MainViewerPanoramaPlayer","class":"PanoramaPlayListItem","camera":"this.panorama_945D1972_994F_57EC_41C1_F82961E9386B_camera","media":"this.panorama_945D1972_994F_57EC_41C1_F82961E9386B"},{"player":"this.MainViewerPanoramaPlayer","class":"PanoramaPlayListItem","camera":"this.panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_camera","media":"this.panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147"}],"id":"ThumbnailList_54AF0828_5A33_69A0_41BD_37E00EBA3E67_playlist"},{"partial":false,"thumbnailUrl":"media/panorama_945D1972_994F_57EC_41C1_F82961E9386B_t.jpg","overlays":["this.overlay_945CF972_994F_57EC_41E2_74E20402CD03"],"adjacentPanoramas":[{"distance":0.83,"panorama":"this.panorama_9DE712F3_9001_2562_41C7_4BD2528CF168","yaw":-178.1,"select":"this.overlay_945CF972_994F_57EC_41E2_74E20402CD03.get('areas').forEach(function(a){ a.trigger('click') })","data":{"overlayID":"overlay_945CF972_994F_57EC_41E2_74E20402CD03"},"class":"AdjacentPanorama"}],"class":"Panorama","pitch":0,"id":"panorama_945D1972_994F_57EC_41C1_F82961E9386B","label":trans('panorama_945D1972_994F_57EC_41C1_F82961E9386B.label'),"frames":[{"class":"CubicPanoramaFrame","cube":{"class":"ImageResource","levels":[{"width":24576,"colCount":48,"url":"media/panorama_945D1972_994F_57EC_41C1_F82961E9386B_0/{face}/0/{row}_{column}.jpg","height":4096,"tags":"ondemand","class":"TiledImageResourceLevel","rowCount":8},{"width":12288,"colCount":24,"url":"media/panorama_945D1972_994F_57EC_41C1_F82961E9386B_0/{face}/1/{row}_{column}.jpg","height":2048,"tags":"ondemand","class":"TiledImageResourceLevel","rowCount":4},{"width":6144,"colCount":12,"url":"media/panorama_945D1972_994F_57EC_41C1_F82961E9386B_0/{face}/2/{row}_{column}.jpg","height":1024,"tags":"ondemand","class":"TiledImageResourceLevel","rowCount":2},{"width":3072,"colCount":6,"url":"media/panorama_945D1972_994F_57EC_41C1_F82961E9386B_0/{face}/3/{row}_{column}.jpg","height":512,"tags":["ondemand","preload"],"class":"TiledImageResourceLevel","rowCount":1},{"width":12288,"colCount":6,"url":"media/panorama_945D1972_994F_57EC_41C1_F82961E9386B_0/{face}/vr2gen/0.jpg","height":2048,"tags":"mobilevr2gen","class":"TiledImageResourceLevel","rowCount":1}]},"thumbnailUrl":"media/panorama_945D1972_994F_57EC_41C1_F82961E9386B_t.jpg"}],"hfovMax":130,"hfov":360,"data":{"label":"img_7729-img_7731 Panorama"},"vfov":180},{"partial":false,"thumbnailUrl":"media/panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_t.jpg","overlays":["this.overlay_9F1F089E_9007_25A2_41E0_5370FBBD8E26","this.overlay_80CA63E6_9007_2B65_41D2_05F6220A5B68"],"adjacentPanoramas":[{"distance":1.73,"panorama":"this.panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147","yaw":149.78,"select":"this.overlay_9F1F089E_9007_25A2_41E0_5370FBBD8E26.get('areas').forEach(function(a){ a.trigger('click') })","data":{"overlayID":"overlay_9F1F089E_9007_25A2_41E0_5370FBBD8E26"},"class":"AdjacentPanorama"},{"distance":1.8,"panorama":"this.panorama_945D1972_994F_57EC_41C1_F82961E9386B","yaw":-159.95,"select":"this.overlay_80CA63E6_9007_2B65_41D2_05F6220A5B68.get('areas').forEach(function(a){ a.trigger('click') })","data":{"overlayID":"overlay_80CA63E6_9007_2B65_41D2_05F6220A5B68"},"class":"AdjacentPanorama"}],"class":"Panorama","pitch":0,"id":"panorama_9DE712F3_9001_2562_41C7_4BD2528CF168","label":trans('panorama_9DE712F3_9001_2562_41C7_4BD2528CF168.label'),"frames":[{"class":"CubicPanoramaFrame","cube":{"class":"ImageResource","levels":[{"width":24576,"colCount":48,"url":"media/panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_0/{face}/0/{row}_{column}.jpg","height":4096,"tags":"ondemand","class":"TiledImageResourceLevel","rowCount":8},{"width":12288,"colCount":24,"url":"media/panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_0/{face}/1/{row}_{column}.jpg","height":2048,"tags":"ondemand","class":"TiledImageResourceLevel","rowCount":4},{"width":6144,"colCount":12,"url":"media/panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_0/{face}/2/{row}_{column}.jpg","height":1024,"tags":"ondemand","class":"TiledImageResourceLevel","rowCount":2},{"width":3072,"colCount":6,"url":"media/panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_0/{face}/3/{row}_{column}.jpg","height":512,"tags":["ondemand","preload"],"class":"TiledImageResourceLevel","rowCount":1},{"width":12288,"colCount":6,"url":"media/panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_0/{face}/vr2gen/0.jpg","height":2048,"tags":"mobilevr2gen","class":"TiledImageResourceLevel","rowCount":1}]},"thumbnailUrl":"media/panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_t.jpg"}],"hfovMax":130,"hfov":360,"data":{"label":"img_7693-img_7695 Panorama"},"vfov":180},{"initialPosition":{"class":"PanoramaCameraPosition","yaw":-167.85,"pitch":-3.05},"hoverFactor":0,"id":"panorama_9DE712F3_9001_2562_41C7_4BD2528CF168_camera","manualZoomSpeed":3,"automaticZoomSpeed":0,"class":"PanoramaCamera","automaticRotationSpeed":0},{"borderSize":0,"itemLabelFontWeight":"normal","borderRadius":5,"itemThumbnailShadowHorizontalLength":3,"itemPaddingLeft":3,"width":"63.45%","itemLabelFontSize":14,"scrollBarVisible":"rollOver","class":"ThumbnailList","paddingTop":10,"selectedItemLabelFontWeight":"bold","itemThumbnailWidth":100,"itemLabelHorizontalAlign":"center","paddingLeft":20,"paddingBottom":10,"id":"ThumbnailList_54AF0828_5A33_69A0_41BD_37E00EBA3E67","data":{"name":"\u041f\u0440\u0435\u0432\u044c\u044e"},"toolTipHorizontalAlign":"center","backgroundOpacity":0,"paddingRight":20,"itemThumbnailShadowVerticalLength":3,"itemThumbnailShadowSpread":1,"itemBackgroundColor":[],"itemLabelGap":8,"top":"0%","horizontalAlign":"center","itemThumbnailShadowBlurRadius":8,"itemThumbnailShadowOpacity":0.57,"itemBackgroundColorRatios":[],"scrollBarWidth":10,"itemBorderRadius":0,"verticalAlign":"top","itemLabelFontColor":"#FFFFFF","itemBackgroundColorDirection":"vertical","itemOpacity":1,"itemThumbnailBorderRadius":5,"propagateClick":false,"scrollBarColor":"#FFFFFF","scrollBarMargin":2,"itemHorizontalAlign":"center","height":99,"itemPaddingTop":3,"rollOverItemLabelFontWeight":"bold","itemVerticalAlign":"middle","itemThumbnailHeight":75,"itemBackgroundOpacity":0,"scrollBarOpacity":0.5,"itemLabelPosition":"bottom","itemThumbnailShadowColor":"#000000","itemThumbnailShadow":true,"playList":"this.ThumbnailList_54AF0828_5A33_69A0_41BD_37E00EBA3E67_playlist","layout":"horizontal","itemLabelTextDecoration":"none","itemPaddingBottom":3,"itemThumbnailOpacity":1,"itemPaddingRight":3,"itemLabelFontStyle":"normal","minHeight":1,"selectedItemLabelFontColor":"#FFCC00","shadow":false,"itemMode":"thumbnail-only","minWidth":1,"itemLabelFontFamily":"Arial","itemThumbnailScaleMode":"fit_outside","left":"17.91%","gap":5},{"initialPosition":{"class":"PanoramaCameraPosition","yaw":-49.85,"pitch":-12.5},"hoverFactor":0,"id":"panorama_945D1972_994F_57EC_41C1_F82961E9386B_camera","manualZoomSpeed":3,"automaticZoomSpeed":0,"class":"PanoramaCamera","automaticRotationSpeed":0},{"borderSize":0,"right":"41.44%","borderRadius":0,"width":274,"visible":false,"class":"IconButton","paddingTop":0,"cursor":"hand","paddingLeft":0,"paddingBottom":0,"id":"IconButton_5572B1E0_5A31_3ADF_41CD_0EECF733CC16","data":{"name":"\u041e\u0442\u043a\u0440\u044b\u0442\u044c \u043a\u0430\u0440\u0442\u0443"},"toolTipHorizontalAlign":"center","backgroundOpacity":0,"transparencyActive":false,"horizontalAlign":"center","paddingRight":0,"bottom":"1.96%","height":50,"verticalAlign":"middle","maxHeight":50,"maxWidth":274,"mode":"toggle","minHeight":1,"minWidth":1,"shadow":false,"iconURL":"skin/IconButton_5572B1E0_5A31_3ADF_41CD_0EECF733CC16.png","propagateClick":false},{"borderSize":0,"shadow":false,"gap":10,"scrollBarVisible":"rollOver","contentOpaque":false,"borderRadius":0,"overflow":"hidden","class":"Container","paddingTop":0,"paddingLeft":0,"paddingBottom":0,"id":"Container_6772724D_6A3B_57AB_41D8_C0A9B50F32B8","data":{"name":"Container1938"},"toolTipHorizontalAlign":"center","backgroundOpacity":0.3,"paddingRight":0,"scrollBarWidth":10,"horizontalAlign":"center","backgroundColorDirection":"vertical","children":["this.IconButton_541BE9F5_5A31_EAA1_41C1_5F09C83E31B4","this.IconButton_577E4353_5A11_1FE1_41C4_2ECC0A11012B"],"bottom":"0%","width":"7.841%","scrollBarOpacity":0.5,"verticalAlign":"middle","backgroundColor":["#FFFFFF","#FFFFFF"],"scrollBarMargin":2,"creationPolicy":"inAdvance","height":"6.776%","scrollBarColor":"#000000","maxHeight":65,"maxWidth":130,"backgroundColorRatios":[0,1],"layout":"horizontal","minHeight":65,"minWidth":130,"right":"0%","propagateClick":false},{"partial":false,"thumbnailUrl":"media/panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_t.jpg","overlays":["this.overlay_80C05A93_9001_25A3_41D3_974AE4898555"],"adjacentPanoramas":[{"distance":3.11,"panorama":"this.panorama_9DE712F3_9001_2562_41C7_4BD2528CF168","yaw":-116.88,"select":"this.overlay_80C05A93_9001_25A3_41D3_974AE4898555.get('areas').forEach(function(a){ a.trigger('click') })","data":{"overlayID":"overlay_80C05A93_9001_25A3_41D3_974AE4898555"},"class":"AdjacentPanorama"}],"class":"Panorama","pitch":0,"id":"panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147","label":trans('panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147.label'),"frames":[{"class":"CubicPanoramaFrame","cube":{"class":"ImageResource","levels":[{"width":24576,"colCount":48,"url":"media/panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_0/{face}/0/{row}_{column}.jpg","height":4096,"tags":"ondemand","class":"TiledImageResourceLevel","rowCount":8},{"width":12288,"colCount":24,"url":"media/panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_0/{face}/1/{row}_{column}.jpg","height":2048,"tags":"ondemand","class":"TiledImageResourceLevel","rowCount":4},{"width":6144,"colCount":12,"url":"media/panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_0/{face}/2/{row}_{column}.jpg","height":1024,"tags":"ondemand","class":"TiledImageResourceLevel","rowCount":2},{"width":3072,"colCount":6,"url":"media/panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_0/{face}/3/{row}_{column}.jpg","height":512,"tags":["ondemand","preload"],"class":"TiledImageResourceLevel","rowCount":1},{"width":12288,"colCount":6,"url":"media/panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_0/{face}/vr2gen/0.jpg","height":2048,"tags":"mobilevr2gen","class":"TiledImageResourceLevel","rowCount":1}]},"thumbnailUrl":"media/panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_t.jpg"}],"hfovMax":130,"hfov":360,"data":{"label":"img_7768-img_7770 Panorama"},"vfov":180},{"progressBackgroundOpacity":1,"toolTipPaddingRight":4,"borderSize":0,"subtitlesTextShadowColor":"#000000","progressBarOpacity":1,"playbackBarLeft":0,"playbackBarRight":0,"toolTipBackgroundColor":"#F6F6F6","progressBottom":0,"playbackBarHeadHeight":15,"playbackBarProgressBorderRadius":0,"subtitlesShadow":false,"translationTransitionDuration":1000,"subtitlesFontWeight":"normal","toolTipShadowVerticalLength":0,"playbackBarProgressBackgroundColor":["#3399FF"],"subtitlesPaddingTop":5,"width":"100%","class":"ViewerArea","data":{"name":"Main Viewer"},"toolTipShadowBlurRadius":3,"toolTipFontSize":"12px","paddingLeft":0,"toolTipFontFamily":"Arial","toolTipPaddingTop":2,"id":"MainViewer","playbackBarBackgroundOpacity":1,"toolTipFontColor":"#606060","toolTipBorderSize":0,"paddingRight":0,"toolTipShadowHorizontalLength":0,"playbackBarHeadShadowOpacity":0.7,"progressBorderSize":0,"subtitlesEnabled":true,"displayTooltipInSurfaceSelection":true,"transitionDuration":500,"toolTipTextShadowColor":"#000000","progressBarBorderSize":0,"progressBarBorderRadius":0,"progressHeight":10,"toolTipOpacity":1,"toolTipPaddingLeft":4,"playbackBarProgressBackgroundColorRatios":[0],"subtitlesOpacity":1,"subtitlesGap":0,"height":"100%","playbackBarHeadBorderSize":0,"subtitlesPaddingLeft":5,"playbackBarHeadBackgroundColorRatios":[0,1],"playbackBarHeadShadow":true,"progressBackgroundColorRatios":[0],"vrPointerSelectionColor":"#FF6600","playbackBarHeadShadowColor":"#000000","playbackBarHeadOpacity":1,"playbackBarBorderRadius":0,"subtitlesBackgroundColor":"#000000","subtitlesHorizontalAlign":"center","playbackBarBorderColor":"#FFFFFF","progressRight":0,"subtitlesVerticalAlign":"bottom","subtitlesBottom":50,"progressBorderRadius":0,"firstTransitionDuration":0,"playbackBarProgressBorderColor":"#000000","subtitlesPaddingRight":5,"vrPointerSelectionTime":2000,"playbackBarOpacity":1,"progressOpacity":1,"subtitlesTextShadowOpacity":1,"minHeight":50,"vrPointerColor":"#FFFFFF","playbackBarHeadBackgroundColor":["#111111","#666666"],"minWidth":100,"toolTipPaddingBottom":2,"subtitlesFontSize":"3vmin","subtitlesBorderSize":0,"subtitlesPaddingBottom":5,"propagateClick":false,"playbackBarHeadShadowHorizontalLength":0,"toolTipDisplayTime":600,"displayTooltipInTouchScreens":true,"playbackBarHeadShadowVerticalLength":0,"toolTipTextShadowOpacity":0,"progressBarBackgroundColorDirection":"vertical","borderRadius":0,"surfaceReticleColor":"#FFFFFF","toolTipShadowColor":"#333333","surfaceReticleSelectionOpacity":1,"playbackBarHeadBorderRadius":0,"playbackBarBottom":5,"subtitlesFontColor":"#FFFFFF","progressBarBorderColor":"#000000","surfaceReticleOpacity":0.6,"toolTipBorderRadius":0,"subtitlesBackgroundOpacity":0.2,"paddingTop":0,"playbackBarHeadBorderColor":"#000000","playbackBarProgressOpacity":1,"toolTipHorizontalAlign":"center","toolTipShadowOpacity":1,"paddingBottom":0,"progressBarBackgroundColorRatios":[0],"subtitlesBorderColor":"#FFFFFF","playbackBarProgressBackgroundColorDirection":"vertical","progressBackgroundColorDirection":"vertical","progressLeft":0,"playbackBarBorderSize":0,"subtitlesTextDecoration":"none","subtitlesTop":0,"subtitlesTextShadowBlurRadius":0,"subtitlesTextShadowHorizontalLength":1,"subtitlesFontFamily":"Arial","toolTipFontWeight":"normal","playbackBarHeight":10,"subtitlesTextShadowVerticalLength":1,"playbackBarBackgroundColor":["#FFFFFF"],"transitionMode":"blending","toolTipBorderColor":"#767676","playbackBarHeadBackgroundColorDirection":"vertical","toolTipFontStyle":"normal","progressBorderColor":"#000000","playbackBarHeadWidth":6,"playbackBarProgressBorderSize":0,"progressBarBackgroundColor":["#3399FF"],"playbackBarBackgroundColorDirection":"vertical","playbackBarHeadShadowBlurRadius":3,"surfaceReticleSelectionColor":"#FFFFFF","toolTipTextShadowBlurRadius":3,"toolTipShadowSpread":0,"progressBackgroundColor":["#FFFFFF"],"shadow":false,"doubleClickAction":"toggle_fullscreen"},{"toolTipShadowHorizontalLength":0,"toolTipDisplayTime":600,"borderSize":0,"data":{"name":"\u041f\u0430\u043c\u044f\u0442\u043a\u0430"},"toolTipTextShadowOpacity":0,"borderRadius":0,"toolTipFontSize":"12px","toolTipShadowColor":"#333333","width":48,"toolTipShadowVerticalLength":0,"toolTip":trans('IconButton_541BE9F5_5A31_EAA1_41C1_5F09C83E31B4.toolTip'),"toolTipBorderRadius":0,"class":"IconButton","paddingTop":0,"toolTipShadowBlurRadius":3,"cursor":"hand","paddingLeft":0,"toolTipFontFamily":"Arial","toolTipPaddingTop":2,"paddingBottom":0,"id":"IconButton_541BE9F5_5A31_EAA1_41C1_5F09C83E31B4","toolTipHorizontalAlign":"center","toolTipShadowOpacity":1,"toolTipFontColor":"#606060","toolTipBorderSize":0,"backgroundOpacity":0,"paddingRight":0,"transparencyActive":false,"horizontalAlign":"center","toolTipTextShadowColor":"#000000","toolTipFontWeight":"normal","toolTipOpacity":1,"toolTipPaddingLeft":4,"height":48,"verticalAlign":"middle","click":"this.showPopupImage(this.ImageResource_8213958C_9000_EFA5_41C6_847FB5CF4ADC,null,'90%','90%',this.FadeInEffect_8213B58C_9000_EFA5_41CA_329ACCE9AB66,this.FadeOutEffect_8213A58C_9000_EFA5_41DA_63ACC00D0975,{'rollOverBackgroundColorDirection':'vertical','borderSize':0,'iconLineWidth':5,'borderRadius':0,'backgroundColor':['#DDDDDD','#EEEEEE','#FFFFFF'],'rollOverBackgroundColorRatios':[0,0.09803921568627451,1],'rollOverBackgroundColor':['#DDDDDD','#EEEEEE','#FFFFFF'],'borderColor':'#000000','pressedBackgroundOpacity':0.3,'pressedBorderSize':0,'rollOverBorderColor':'#000000','pressedIconHeight':20,'rollOverIconLineWidth':5,'pressedBackgroundColor':['#DDDDDD','#EEEEEE','#FFFFFF'],'paddingLeft':5,'pressedIconColor':'#888888','paddingTop':5,'pressedBackgroundColorDirection':'vertical','rollOverIconHeight':20,'backgroundOpacity':0.3,'pressedIconLineWidth':5,'rollOverBorderSize':0,'backgroundColorRatios':[0,0.09803921568627451,1],'pressedBackgroundColorRatios':[0,0.09803921568627451,1],'paddingBottom':5,'paddingRight':5,'pressedIconWidth':20,'iconColor':'#000000','rollOverBackgroundOpacity':0.3,'rollOverIconWidth':20,'pressedBorderColor':'#000000','iconWidth':20,'backgroundColorDirection':'vertical','rollOverIconColor':'#666666','iconHeight':20},null,null,false)","toolTipBorderColor":"#767676","maxHeight":48,"maxWidth":48,"toolTipPaddingBottom":2,"toolTipFontStyle":"normal","mode":"push","minHeight":48,"toolTipTextShadowBlurRadius":3,"minWidth":48,"shadow":false,"iconURL":"skin/IconButton_541BE9F5_5A31_EAA1_41C1_5F09C83E31B4.png","toolTipBackgroundColor":"#F6F6F6","toolTipShadowSpread":0,"toolTipPaddingRight":4,"propagateClick":false},{"class":"FadeOutEffect","easing":"cubic_out","duration":500,"id":"FadeOutEffect_8213A58C_9000_EFA5_41DA_63ACC00D0975"},{"borderSize":0,"shadow":false,"data":{"name":"UIComponent2477"},"visible":false,"borderRadius":0,"showEffect":{"class":"FadeInEffect","easing":"cubic_in_out","duration":350},"class":"UIComponent","paddingTop":0,"paddingLeft":0,"paddingBottom":0,"id":"veilPopupPanorama","toolTipHorizontalAlign":"center","backgroundOpacity":0.55,"paddingRight":0,"top":0,"backgroundColorDirection":"vertical","bottom":0,"backgroundColor":["#000000"],"backgroundColorRatios":[0],"left":0,"minHeight":0,"minWidth":0,"right":0,"propagateClick":false},{"borderSize":0,"shadow":false,"data":{"name":"ZoomImage2478"},"visible":false,"borderRadius":0,"class":"ZoomImage","paddingTop":0,"paddingLeft":0,"paddingBottom":0,"id":"zoomImagePopupPanorama","toolTipHorizontalAlign":"center","backgroundOpacity":1,"paddingRight":0,"top":0,"backgroundColorDirection":"vertical","bottom":0,"backgroundColor":[],"backgroundColorRatios":[],"left":0,"minHeight":0,"minWidth":0,"right":0,"propagateClick":false,"scaleMode":"custom"},{"pressedIconColor":"#888888","fontWeight":"normal","borderSize":0,"shadow":false,"borderRadius":0,"gap":5,"data":{"name":"CloseButton2479"},"visible":false,"textDecoration":"none","showEffect":{"class":"FadeInEffect","easing":"cubic_in_out","duration":350},"class":"CloseButton","paddingTop":5,"iconLineWidth":2,"cursor":"hand","paddingLeft":5,"paddingBottom":5,"id":"closeButtonPopupPanorama","fontFamily":"Arial","toolTipHorizontalAlign":"center","shadowColor":"#000000","backgroundOpacity":1,"shadowSpread":1,"top":10,"horizontalAlign":"center","backgroundColorDirection":"vertical","paddingRight":5,"rollOverIconColor":"#666666","iconHeight":"100%","verticalAlign":"middle","backgroundColor":["#DDDDDD","#EEEEEE","#FFFFFF"],"fontColor":"#FFFFFF","layout":"horizontal","iconColor":"#000000","fontSize":"1.29vmin","borderColor":"#000000","mode":"push","backgroundColorRatios":[0,0.1,1],"fontStyle":"normal","minHeight":0,"shadowBlurRadius":6,"minWidth":0,"right":10,"iconWidth":"100%","propagateClick":false},{"player":"this.MainViewerPanoramaPlayer","camera":"this.panorama_945D1972_994F_57EC_41C1_F82961E9386B_camera","media":"this.panorama_945D1972_994F_57EC_41C1_F82961E9386B","class":"PanoramaPlayListItem","begin":"this.setEndToItemIndex(this.mainPlayList, 1, 2)","id":"PanoramaPlayListItem_95EDC16C_9951_F7F4_41CC_C6F2B3401C4C"},{"player":"this.MainViewerPanoramaPlayer","camera":"this.panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147_camera","media":"this.panorama_9D6E3CED_9003_3D67_41B1_80B4D1B8F147","class":"PanoramaPlayListItem","begin":"this.setEndToItemIndex(this.mainPlayList, 2, 0)","end":"this.trigger('tourEnded')","id":"PanoramaPlayListItem_95EDF16C_9951_F7F4_41CF_CF415B577BDE"},{"height":512,"width":512,"class":"ImageResourceLevel","url":trans('imlevel_95F49051_9951_F52C_41D7_977C48CFA566.url'),"id":"imlevel_95F49051_9951_F52C_41D7_977C48CFA566"},{"enabledInCardboard":true,"maps":[],"data":{"hasPanoramaAction":true,"label":"Arrow 04a"},"useHandCursor":true,"class":"HotspotPanoramaOverlay","items":[{"image":"this.AnimatedImageResource_95E970A3_9951_F56C_41E2_3FBE3F91F976","distance":100,"yaw":-178.1,"pitch":-63.96,"vfov":7.44,"class":"HotspotPanoramaOverlayImage","data":{"label":"Arrow 04a"},"verticalAlign":"middle","horizontalAlign":"center","hfov":10.5,"scaleMode":"fit_inside"}],"areas":["this.HotspotPanoramaOverlayArea_80CDAC7C_9001_1D65_41D7_F5E97E9866A8"],"id":"overlay_945CF972_994F_57EC_41E2_74E20402CD03"},{"enabledInCardboard":true,"maps":[],"data":{"hasPanoramaAction":true,"label":"Arrow 04a"},"useHandCursor":true,"class":"HotspotPanoramaOverlay","items":[{"image":"this.AnimatedImageResource_95E9C0A3_9951_F56C_41A9_1331167E0736","distance":100,"yaw":149.78,"pitch":-44.52,"scaleMode":"fit_inside","class":"HotspotPanoramaOverlayImage","data":{"label":"Arrow 04a"},"roll":13.94,"verticalAlign":"middle","horizontalAlign":"center","hfov":10.5,"vfov":7.44}],"areas":["this.HotspotPanoramaOverlayArea_9F7AF8F0_9007_257D_41E0_0D7D054A437E"],"id":"overlay_9F1F089E_9007_25A2_41E0_5370FBBD8E26"},{"enabledInCardboard":true,"maps":[],"data":{"hasPanoramaAction":true,"label":"Arrow 04a"},"useHandCursor":true,"class":"HotspotPanoramaOverlay","items":[{"image":"this.AnimatedImageResource_95E930A3_9951_F56C_41B9_C98F1D307C30","distance":100,"yaw":-159.95,"pitch":-43.43,"vfov":7.44,"class":"HotspotPanoramaOverlayImage","data":{"label":"Arrow 04a"},"verticalAlign":"middle","horizontalAlign":"center","hfov":10.5,"scaleMode":"fit_inside"}],"areas":["this.HotspotPanoramaOverlayArea_80C893EA_9007_2B6D_41DB_09A91E2C0838"],"id":"overlay_80CA63E6_9007_2B65_41D2_05F6220A5B68"},{"enabledInCardboard":true,"maps":[],"data":{"hasPanoramaAction":true,"label":"Arrow 04a"},"useHandCursor":true,"class":"HotspotPanoramaOverlay","items":[{"image":"this.AnimatedImageResource_95EAA0A3_9951_F56C_41D4_55637174664C","distance":100,"yaw":-116.88,"pitch":-28.65,"vfov":7.44,"class":"HotspotPanoramaOverlayImage","data":{"label":"Arrow 04a"},"verticalAlign":"middle","horizontalAlign":"center","hfov":10.5,"scaleMode":"fit_inside"}],"areas":["this.HotspotPanoramaOverlayArea_80CB7ABF_9001_25E3_41D2_8675286270DB"],"id":"overlay_80C05A93_9001_25A3_41D3_974AE4898555"},{"frameCount":21,"class":"AnimatedImageResource","colCount":4,"levels":[{"height":510,"width":480,"class":"ImageResourceLevel","url":"media/res_80E93C63_9003_1D62_41CE_DC72C3458373_0.png"}],"frameDuration":41,"rowCount":6,"id":"AnimatedImageResource_95E970A3_9951_F56C_41E2_3FBE3F91F976"},{"mapColor":"any","class":"HotspotPanoramaOverlayArea","click":"this.mainPlayList.set('selectedIndex', 0)","id":"HotspotPanoramaOverlayArea_80CDAC7C_9001_1D65_41D7_F5E97E9866A8"},{"frameCount":21,"class":"AnimatedImageResource","colCount":4,"levels":[{"height":510,"width":480,"class":"ImageResourceLevel","url":"media/res_80E93C63_9003_1D62_41CE_DC72C3458373_0.png"}],"frameDuration":41,"rowCount":6,"id":"AnimatedImageResource_95E9C0A3_9951_F56C_41A9_1331167E0736"},{"mapColor":"any","class":"HotspotPanoramaOverlayArea","click":"this.setPanoramaCameraWithSpot(this.mainPlayList, this.PanoramaPlayListItem_95EDF16C_9951_F7F4_41CF_CF415B577BDE, 43.40982956394007, -2.9545006553851647, NaN || TDV.Player.DEFAULT_PANORAMA_HFOV); this.mainPlayList.set('selectedIndex', 2)","id":"HotspotPanoramaOverlayArea_9F7AF8F0_9007_257D_41E0_0D7D054A437E"},{"frameCount":21,"class":"AnimatedImageResource","colCount":4,"levels":[{"height":510,"width":480,"class":"ImageResourceLevel","url":"media/res_80E93C63_9003_1D62_41CE_DC72C3458373_0.png"}],"frameDuration":41,"rowCount":6,"id":"AnimatedImageResource_95E930A3_9951_F56C_41B9_C98F1D307C30"},{"mapColor":"any","class":"HotspotPanoramaOverlayArea","click":"this.setPanoramaCameraWithSpot(this.mainPlayList, this.PanoramaPlayListItem_95EDC16C_9951_F7F4_41CC_C6F2B3401C4C, -49.85718412038064, -12.509359348873714, NaN || TDV.Player.DEFAULT_PANORAMA_HFOV); this.mainPlayList.set('selectedIndex', 1)","id":"HotspotPanoramaOverlayArea_80C893EA_9007_2B6D_41DB_09A91E2C0838"},{"frameCount":21,"class":"AnimatedImageResource","colCount":4,"levels":[{"height":510,"width":480,"class":"ImageResourceLevel","url":"media/res_80E93C63_9003_1D62_41CE_DC72C3458373_0.png"}],"frameDuration":41,"rowCount":6,"id":"AnimatedImageResource_95EAA0A3_9951_F56C_41D4_55637174664C"},{"mapColor":"any","class":"HotspotPanoramaOverlayArea","click":"this.mainPlayList.set('selectedIndex', 0)","id":"HotspotPanoramaOverlayArea_80CB7ABF_9001_25E3_41D2_8675286270DB"}],"backgroundColorRatios":[0],"start":"this.init(); this.syncPlaylists([this.mainPlayList,this.ThumbnailList_54AF0828_5A33_69A0_41BD_37E00EBA3E67_playlist]); if(!this.get('fullscreenAvailable')) { [this.IconButton_577E4353_5A11_1FE1_41C4_2ECC0A11012B].forEach(function(component) { if(component.get('class') != 'ViewerArea') component.set('visible', false); }) }","minHeight":20,"downloadEnabled":false,"buttonToggleFullscreen":"this.IconButton_577E4353_5A11_1FE1_41C4_2ECC0A11012B","minWidth":20,"shadow":false,"defaultVRPointer":"laser","propagateClick":false};
if (script['data'] == undefined)
    script['data'] = {};
script['data']['translateObjs'] = translateObjs;
script['data']['history'] = {};
script['scripts']['createQuizConfig'] = createQuizConfig;
TDV['PlayerAPI']['defineScript'](script);
//# sourceMappingURL=script_device_v2022.1.0-beta.10298.js.map
})();
//Generated with v2022.1.0-beta.10298, Sat Nov 4 2023