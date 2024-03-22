{"version":3,"sources":["socialvideo.bundle.js"],"names":["this","BX","Vue3","exports","ui_fonts_opensans","main_polyfill_intersectionobserver","ui_vue3_directives_lazyload","main_core_events","State","Object","freeze","play","pause","stop","none","SocialVideo","props","id","default","src","preview","autoplay","containerClass","containerStyle","elementStyle","showControls","data","preload","previewLoaded","loaded","loading","playAfterLoad","enterFullscreen","playBeforeMute","state","progress","timeCurrent","timeTotal","muteFlag","directives","lazyload","created","$Bitrix","eventEmitter","subscribe","onPlay","onStop","onPause","EventEmitter","mounted","getObserver","observe","$refs","body","beforeUnmount","unsubscribe","unobserve","watch","value","registerPlayer","methods","loadFile","clickToButton","event","stopPropagation","clickToMute","mute","unmute","click","autoPlayDisabled","isMobile","source","webkitEnterFullscreen","requestFullscreen","$emit","muted","setProgress","percent","pixel","formatTime","second","Math","floor","hour","minute","toString","padStart","getData","start","initiator","videoEventRouter","eventName","duration","console","error","currentTime","round","observer","IntersectionObserver","entries","forEach","entry","isIntersecting","threshold","lazyLoadCallback","element","computed","showStartButton","showInterface","labelTime","time","UA","navigator","userAgent","toLowerCase","includes","template","SocialVideoState","Components","Directives","Event"],"mappings":"AAAAA,KAAKC,GAAKD,KAAKC,IAAM,GACrBD,KAAKC,GAAGC,KAAOF,KAAKC,GAAGC,MAAQ,IAC9B,SAAUC,EAAQC,EAAkBC,EAAmCC,EAA4BC,GACnG,aAUA,MAAMC,EAAQC,OAAOC,OAAO,CAC1BC,KAAM,OACNC,MAAO,QACPC,KAAM,OACNC,KAAM,SAER,MAAMC,EAAc,CAClBC,MAAO,CACLC,GAAI,CACFC,QAAS,GAEXC,IAAK,CACHD,QAAS,IAEXE,QAAS,CACPF,QAAS,IAEXG,SAAU,CACRH,QAAS,MAEXI,eAAgB,CACdJ,QAAS,MAEXK,eAAgB,CACdL,QAAS,MAEXM,aAAc,CACZN,QAAS,MAEXO,aAAc,CACZP,QAAS,OAIbQ,OACE,MAAO,CACLC,QAAS,OACTC,cAAe,MACfC,OAAQ,MACRC,QAAS,MACTC,cAAe,MACfC,gBAAiB,MACjBC,eAAgB,EAChBC,MAAO1B,EAAMM,KACbqB,SAAU,EACVC,YAAa,EACbC,UAAW,EACXC,SAAU,OAIdC,WAAY,CACVC,SAAUlC,EAA4BkC,UAGxCC,UACE,IAAKzC,KAAKoB,QAAS,CACjBpB,KAAK4B,cAAgB,KACrB5B,KAAK2B,QAAU,WAGjB3B,KAAK0C,QAAQC,aAAaC,UAAU,sBAAuB5C,KAAK6C,QAChE7C,KAAK0C,QAAQC,aAAaC,UAAU,sBAAuB5C,KAAK8C,QAChE9C,KAAK0C,QAAQC,aAAaC,UAAU,uBAAwB5C,KAAK+C,SACjExC,EAAiByC,aAAaJ,UAAU,uBAAwB5C,KAAK+C,UAGvEE,UACEjD,KAAKkD,cAAcC,QAAQnD,KAAKoD,MAAMC,OAGxCC,gBACEtD,KAAK0C,QAAQC,aAAaY,YAAY,sBAAuBvD,KAAK6C,QAClE7C,KAAK0C,QAAQC,aAAaY,YAAY,sBAAuBvD,KAAK8C,QAClE9C,KAAK0C,QAAQC,aAAaY,YAAY,uBAAwBvD,KAAK+C,SACnExC,EAAiByC,aAAaO,YAAY,uBAAwBvD,KAAK+C,SACvE/C,KAAKkD,cAAcM,UAAUxD,KAAKoD,MAAMC,OAG1CI,MAAO,CACLxC,GAAGyC,GACD1D,KAAK2D,eAAeD,KAIxBE,QAAS,CACPC,SAASlD,EAAO,OACd,GAAIX,KAAK6B,OAAQ,CACf,OAAO,KAGT,GAAI7B,KAAK8B,QAAS,CAChB,OAAO,KAGT9B,KAAK2B,QAAU,OACf3B,KAAK8B,QAAU,KACf9B,KAAK+B,cAAgBpB,EACrB,OAAO,MAGTmD,cAAcC,GACZ,IAAK/D,KAAKmB,IAAK,CACb,OAAO,MAGT,GAAInB,KAAKkC,QAAU1B,EAAMG,KAAM,CAC7BX,KAAKkD,cAAcM,UAAUxD,KAAKoD,MAAMC,MACxCrD,KAAKY,YACA,CACLZ,KAAKW,OAGPoD,EAAMC,mBAGRC,cACE,IAAKjE,KAAKmB,IAAK,CACb,OAAO,MAGT,IAAKnB,KAAKsC,SAAU,CAClBtC,KAAKkE,WACA,CACLlE,KAAKmE,SAGPJ,MAAMC,mBAGRI,MAAML,GACJ,GAAI/D,KAAKqE,iBAAkB,CACzBrE,KAAKW,OACLoD,EAAMC,kBACN,OAAO,MAGT,GAAIhE,KAAKsE,SAAU,CACjB,GAAItE,KAAKuE,SAASC,sBAAuB,CACvCxE,KAAKmE,SACLnE,KAAKgC,gBAAkB,KACvBhC,KAAKuE,SAASC,6BACT,GAAIxE,KAAKuE,SAASE,kBAAmB,CAC1CzE,KAAKmE,SACLnE,KAAKgC,gBAAkB,KACvBhC,KAAKuE,SAASE,wBACT,CACLzE,KAAK0E,MAAM,QAASX,QAEjB,CACL/D,KAAK0E,MAAM,QAASX,GAGtBA,EAAMC,mBAGRrD,KAAKoD,GACH,IAAK/D,KAAK6B,OAAQ,CAChB7B,KAAK6D,SAAS,MACd,OAAO,MAGT,IAAK7D,KAAKuE,SAAU,CAClB,OAAO,MAGTvE,KAAKuE,SAAS5D,QAGhBC,QACE,IAAKZ,KAAKuE,SAAU,CAClB,OAAO,MAGTvE,KAAK+B,cAAgB,MACrB/B,KAAKuE,SAAS3D,SAGhBC,OACE,IAAKb,KAAKuE,SAAU,CAClB,OAAO,MAGTvE,KAAKkC,MAAQ1B,EAAMK,KACnBb,KAAKuE,SAAS3D,SAGhBsD,OACE,IAAKlE,KAAKuE,SAAU,CAClB,OAAO,MAGTvE,KAAKsC,SAAW,KAChBtC,KAAKiC,eAAiB,EACtBjC,KAAKuE,SAASI,MAAQ,MAGxBR,SACE,IAAKnE,KAAKuE,SAAU,CAClB,OAAO,MAGTvE,KAAKsC,SAAW,MAChBtC,KAAKuE,SAASI,MAAQ,OAGxBC,YAAYC,EAASC,GAAS,GAC5B9E,KAAKmC,SAAW0C,GAGlBE,WAAWC,GACTA,EAASC,KAAKC,MAAMF,GACpB,MAAMG,EAAOF,KAAKC,MAAMF,EAAS,GAAK,IAEtC,GAAIG,EAAO,EAAG,CACZH,GAAUG,EAAO,GAAK,GAGxB,MAAMC,EAASH,KAAKC,MAAMF,EAAS,IAEnC,GAAII,EAAS,EAAG,CACdJ,GAAUI,EAAS,GAGrB,OAAQD,EAAO,EAAIA,EAAO,IAAM,KAAOA,EAAO,EAAIC,EAAOC,WAAWC,SAAS,EAAG,KAAO,IAAMF,EAAS,KAAOJ,EAAOK,WAAWC,SAAS,EAAG,MAG7IzC,OAAOkB,GACL,MAAMrC,EAAOqC,EAAMwB,UAEnB,GAAI7D,EAAKT,KAAOjB,KAAKiB,GAAI,CACvB,OAAO,MAGT,GAAIS,EAAK8D,MAAO,CACdxF,KAAKa,OAGPb,KAAKW,QAGPmC,OAAOiB,GACL,MAAMrC,EAAOqC,EAAMwB,UAEnB,GAAI7D,EAAK+D,YAAczF,KAAKiB,GAAI,CAC9B,OAAO,MAGTjB,KAAKa,QAGPkC,QAAQgB,GACN,MAAMrC,EAAOqC,EAAMwB,UAEnB,GAAI7D,EAAK+D,YAAczF,KAAKiB,GAAI,CAC9B,OAAO,MAGTjB,KAAKY,SAGP2D,SACE,OAAOvE,KAAKoD,MAAMmB,QAGpBmB,iBAAiBC,EAAW5B,GAC1B,GAAI4B,IAAc,kBAAoBA,IAAc,aAAc,CAChE,IAAK3F,KAAKuE,SAAU,CAClB,OAAO,MAGTvE,KAAKqC,UAAYrC,KAAKuE,SAASqB,cAC1B,GAAID,IAAc,iBAAkB,CACzC,IAAK3F,KAAKuE,SAAU,CAClB,OAAO,MAGTvE,KAAKqC,UAAYrC,KAAKuE,SAASqB,SAC/B5F,KAAK6B,OAAS,KAEd,GAAI7B,KAAK+B,cAAe,CACtB/B,KAAKW,aAEF,GAAIgF,IAAc,SAAWA,IAAc,QAAS,CACzDE,QAAQC,MAAM,6BAA8B9F,KAAKiB,GAAI8C,GACrD/D,KAAK8B,QAAU,MACf9B,KAAKkC,MAAQ1B,EAAMM,KACnBd,KAAKqC,UAAY,EACjBrC,KAAK2B,QAAU,YACV,GAAIgE,IAAc,iBAAkB,CACzC3F,KAAK8B,QAAU,MACf9B,KAAK6B,OAAS,KAEd,GAAI7B,KAAK+B,cAAe,CACtB/B,KAAKW,aAEF,GAAIgF,IAAc,eAAgB,CACvC,IAAK3F,KAAKuE,SAAU,CAClB,OAAO,MAGT,GAAIvE,KAAKuE,SAASI,MAAO,CACvB3E,KAAKkE,WACA,CACLlE,KAAKmE,eAEF,GAAIwB,IAAc,aAAc,CACrC,IAAK3F,KAAKuE,SAAU,CAClB,OAAO,MAGTvE,KAAKoC,YAAcpC,KAAKuE,SAASwB,YAEjC,IAAK/F,KAAKsC,WAAatC,KAAKgC,iBAAmBhC,KAAKoC,cAAgB,EAAG,CACrE,GAAIpC,KAAKiC,gBAAkB,EAAG,CAC5BjC,KAAKkE,OAGPlE,KAAKiC,gBAAkB,EAGzBjC,KAAK4E,YAAYK,KAAKe,MAAM,IAAMhG,KAAKqC,UAAYrC,KAAKoC,mBACnD,GAAIuD,IAAc,QAAS,CAChC,GAAI3F,KAAKkC,QAAU1B,EAAMK,KAAM,CAC7Bb,KAAKkC,MAAQ1B,EAAMI,MAGrB,GAAIZ,KAAKgC,gBAAiB,CACxBhC,KAAKgC,gBAAkB,MACvBhC,KAAKkE,OACLlE,KAAKW,aAEF,GAAIgF,IAAc,OAAQ,CAC/B3F,KAAKkC,MAAQ1B,EAAMG,KAEnB,GAAIX,KAAKkC,QAAU1B,EAAMK,KAAM,CAC7Bb,KAAKmC,SAAW,EAChBnC,KAAKoC,YAAc,EAGrB,GAAIpC,KAAKgC,gBAAiB,CACxBhC,KAAKgC,gBAAkB,SAK7BkB,cACE,GAAIlD,KAAKiG,SAAU,CACjB,OAAOjG,KAAKiG,SAGdjG,KAAKiG,SAAW,IAAIC,sBAAqB,CAACC,EAASF,KACjD,GAAIjG,KAAKqE,iBAAkB,CACzB,OAAO,MAGT8B,EAAQC,SAAQC,IACd,GAAIA,EAAMC,eAAgB,CACxBtG,KAAKW,WACA,CACLX,KAAKY,cAGR,CACD2F,UAAW,CAAC,EAAG,KAEjB,OAAOvG,KAAKiG,UAGdO,iBAAiBC,GACfzG,KAAK4B,cAAgB6E,EAAQvE,QAAU,YAI3CwE,SAAU,CACRlG,MAAO,IAAMA,EAEb6D,mBACE,OAAQrE,KAAKqB,UAAYrB,KAAKkC,QAAU1B,EAAMM,MAGhD6F,kBACE,OAAO3G,KAAKqE,kBAAoBrE,KAAK4B,eAGvCgF,gBACE,OAAO5G,KAAK4B,gBAAkB5B,KAAK2G,iBAGrCE,YACE,IAAK7G,KAAK6B,SAAW7B,KAAKqC,UAAW,CACnC,MAAO,QAGT,IAAIyE,EAEJ,GAAI9G,KAAKkC,QAAU1B,EAAMG,KAAM,CAC7BmG,EAAO9G,KAAKqC,UAAYrC,KAAKoC,gBACxB,CACL0E,EAAO9G,KAAKqC,UAGd,OAAOrC,KAAK+E,WAAW+B,IAGzBxC,WACE,MAAMyC,EAAKC,UAAUC,UAAUC,cAC/B,OAAOH,EAAGI,SAAS,YAAcJ,EAAGI,SAAS,WAAaJ,EAAGI,SAAS,SAAWJ,EAAGI,SAAS,kBAIjGC,SAAU,2gGAiEZjH,EAAQkH,iBAAmB7G,EAC3BL,EAAQY,YAAcA,GAxevB,CA0eGf,KAAKC,GAAGC,KAAKoH,WAAatH,KAAKC,GAAGC,KAAKoH,YAAc,GAAIrH,GAAGA,GAAGA,GAAGC,KAAKqH,WAAWtH,GAAGuH","file":"socialvideo.bundle.map.js"}