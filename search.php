<?php
$fileMap = [
    '0question.u' => 'http://07th-mod.com/download.php?repository=umineko-question&file=master/InDevelopment/ManualUpdates/0.utf',
    '0answer.u' => 'http://07th-mod.com/download.php?repository=umineko-answer&file=adv_mode/0.utf'
];
$contents = '';

foreach ($fileMap as $file => $url) {
    if (file_exists($file)) {
        $contents .= file_get_contents($file);
    } else {
        $newContents = file_get_contents($url);
        $contents .= $newContents;
        file_put_contents($file, $newContents);
    }
}

$matches = preg_split('/bgm(1v?|play2?)/', $contents);
foreach ($matches as $match) {
    if (stripos($match, $_POST['findstr']) !== false) {
        $subMatches = [];
        $thing = trim(preg_split('/\n|\,/', $match)[0]);
        $title = "Full title not found";
        if ($thing == 1) $title = "Thunberg Lily";
        if ($thing == 2) $title = "Door of Summer";
        if ($thing == 3) $title = "HANE (Feathers)";
        if ($thing == 4) $title = "Ride on";
        if ($thing == 5) $title = "sea";
        if ($thing == 6) $title = "Hour of Darkness";
        if ($thing == 7) $title = "Novelette";
        if ($thing == 8) $title = "hope";
        if ($thing == 9) $title = "White Shadow";
        if ($thing == 10) $title = "steady pace";
        if ($thing == 11) $title = "Towering cloud in summer";
        if ($thing == 12) $title = "Moonlit Night";
        if ($thing == 13) $title = "Rose";
        if ($thing == 14) $title = "At Death’s Door";
        if ($thing == 15) $title = "Hell’s Halls";
        if ($thing == 16) $title = "Fortitude";
        if ($thing == 17) $title = "witch in gold(cembalo)";
        if ($thing == 18) $title = "Beckoning";
        if ($thing == 19) $title = "Fishy Aroma";
        if ($thing == 20) $title = "stupefaction";
        if ($thing == 21) $title = "praise";
        if ($thing == 22) $title = "Pass";
        if ($thing == 23) $title = "butterfly";
        if ($thing == 24) $title = "goldenslaughterer";
        if ($thing == 25) $title = "Worldend(bp)";
        if ($thing == 26) $title = "The Witch of the Painting";
        if ($thing == 27) $title = "suspicion";
        if ($thing == 28) $title = "Scar in the Score";
        if ($thing == 29) $title = "Core";
        if ($thing == 30) $title = "Minute darkness";
        if ($thing == 31) $title = "nighteyes";
        if ($thing == 32) $title = "Closed My Heart";
        if ($thing == 33) $title = "Requiem";
        if ($thing == 34) $title = "mind";
        if ($thing == 35) $title = "Worldend";
        if ($thing == 36) $title = "play";
        if ($thing == 37) $title = "system0";
        if ($thing == 38) $title = "Voiceless";
        if ($thing == 39) $title = "dead angle";
        if ($thing == 40) $title = "Organ Short #600 Million in C Minor";
        if ($thing == 41) $title = "Prison STRIP";
        if ($thing == 42) $title = "String Quartet #1 in G Major — I.Allegro";
        if ($thing == 43) $title = "cage";
        if ($thing == 44) $title = "Golden Sneer";
        if ($thing == 45) $title = "Scorpion Guts";
        if ($thing == 46) $title = "Life's End (VerC)";
        if ($thing == 47) $title = "Answer";
        if ($thing == 48) $title = "Answer short";
        if ($thing == 49) $title = "Melody inst.ver";
        if ($thing == 50) $title = "Red Dread";
        if ($thing == 51) $title = "moon";
        if ($thing == 52) $title = "where";
        if ($thing == 53) $title = "Dread of the grave";
        if ($thing == 54) $title = "Worldend dominator";
        if ($thing == 55) $title = "Black Liliana";
        if ($thing == 56) $title = "Rest";
        if ($thing == 57) $title = "End of a Daydream";
        if ($thing == 58) $title = "Melody";
        if ($thing == 59) $title = "Over the sky";
        if ($thing == 60) $title = "sunny spot";
        if ($thing == 61) $title = "The Candles Dance";
        if ($thing == 62) $title = "Distant";
        if ($thing == 63) $title = "psy-chorus";
        if ($thing == 64) $title = "far";
        if ($thing == 65) $title = "red shoes FAKE";
        if ($thing == 66) $title = "mother";
        if ($thing == 67) $title = "haze";
        if ($thing == 68) $title = "Dancing Pipe";
        if ($thing == 69) $title = "Dread of the grave -More fear-";
        if ($thing == 70) $title = "Organ Short #200 Million in C Minor";
        if ($thing == 71) $title = "rhythm-changer";
        if ($thing == 72) $title = "happiness of marionette bonus";
        if ($thing == 73) $title = "happiness of marionette";
        if ($thing == 74) $title = "Dance of the Moon Rabbits";
        if ($thing == 75) $title = "Melting away";
        if ($thing == 76) $title = "soul of soul";
        if ($thing == 77) $title = "miragecoordinator";
        if ($thing == 78) $title = "prison";
        if ($thing == 79) $title = "Thanks for being born";
        if ($thing == 80) $title = "Wings";
        if ($thing == 81) $title = "Paradise Lost";
        if ($thing == 82) $title = "wingless";
        if ($thing == 83) $title = "activepain";
        if ($thing == 84) $title = "Dread of the grave -rhythm ver-";
        if ($thing == 85) $title = "Eternity";
        if ($thing == 86) $title = "over";
        if ($thing == 87) $title = "Like the gale";
        if ($thing == 88) $title = "F Style";
        if ($thing == 89) $title = "Monochrome Clock";
        if ($thing == 90) $title = "apathy";
        if ($thing == 91) $title = "Mystic Forest";
        if ($thing == 92) $title = "Sakutarou's Adventure";
        if ($thing == 93) $title = "Parallel";
        if ($thing == 95) $title = "599 million ruins";
        if ($thing == 96) $title = "Happy Maria!(Instrumental)";
        if ($thing == 97) $title = "Surrounding";
        if ($thing == 98) $title = "open fire";
        if ($thing == 99) $title = "death(from stupefaction)";
        if ($thing == 100) $title = "mortal stampede";
        if ($thing == 101) $title = "Victima propiciatoria";
        if ($thing == 102) $title = "Revolt";
        if ($thing == 103) $title = "Purgatory Catastrophe Rhapsodie";
        if ($thing == 104) $title = "Happy Maria!";
        if ($thing == 105) $title = "dive to emergency";
        if ($thing == 106) $title = "dir";
        if ($thing == 107) $title = "Endless Nine";
        if ($thing == 108) $title = "dreamenddischarger";
        if ($thing == 109) $title = "Discode";
        if ($thing == 110) $title = "twirl";
        if ($thing == 111) $title = "Future";
        if ($thing == 112) $title = "Deep Blue Jeer";
        if ($thing == 113) $title = "The Great Detective Knows";
        if ($thing == 114) $title = "Smileless Soirée";
        if ($thing == 115) $title = "one";
        if ($thing == 116) $title = "Spiral";
        if ($thing == 117) $title = "String Trio #600 Million in F-Sharp Minor";
        if ($thing == 118) $title = "Totenblume";
        if ($thing == 119) $title = "JUSTICE";
        if ($thing == 120) $title = "ACI-L";
        if ($thing == 121) $title = "Predator";
        if ($thing == 122) $title = "Proud-dust";
        if ($thing == 123) $title = "hello your dream";
        if ($thing == 124) $title = "A Lonely Deep-Sea Fish";
        if ($thing == 125) $title = "The Girls’ Witch Hunt";
        if ($thing == 126) $title = "Patchwork Chimera";
        if ($thing == 127) $title = "discolor";
        if ($thing == 128) $title = "resurrectedreplayer";
        if ($thing == 129) $title = "Final Answer";
        if ($thing == 130) $title = "light";
        if ($thing == 131) $title = "Bread of Life";
        if ($thing == 132) $title = "Promise";
        if ($thing == 133) $title = "Tomorrow";
        if ($thing == 134) $title = "WINGS(Ver hope)";
        if ($thing == 135) $title = "Fake Gray Smile";
        if ($thing == 136) $title = "Eternal Chains";
        if ($thing == 137) $title = "Love Examination";
        if ($thing == 138) $title = "Instant";
        if ($thing == 139) $title = "Look Back";
        if ($thing == 140) $title = "Blue Butterfly";
        if ($thing == 141) $title = "my dear";
        if ($thing == 142) $title = "Something’s Up & Going Down";
        if ($thing == 143) $title = "rog-limitation";
        if ($thing == 144) $title = "Waltz Op.34";
        if ($thing == 145) $title = "ALIVE";
        if ($thing == 146) $title = "birth of new witch(inst)";
        if ($thing == 147) $title = "ruriair";
        if ($thing == 148) $title = "Engage of marionette";
        if ($thing == 149) $title = "Life";
        if ($thing == 150) $title = "Loreley";
        if ($thing == 151) $title = "The Sin";
        if ($thing == 152) $title = "The first and The last";
        if ($thing == 153) $title = "Anti-Demon Sequentia";
        if ($thing == 154) $title = "battle field";
        if ($thing == 155) $title = "Rebirth";
        if ($thing == 156) $title = "The Way";
        if ($thing == 157) $title = "liberatedliberator";
        if ($thing == 158) $title = "Thanks for all people";
        if ($thing == 159) $title = "Infant Queen Bee";
        if ($thing == 160) $title = "birth of new witch(Short Ver)";
        if ($thing == 161) $title = "FISHYAROMA";
        if ($thing == 162) $title = "le4-octobre";
        if ($thing == 163) $title = "l&d-circulation";
        if ($thing == 164) $title = "reflection-call";
        if ($thing == 165) $title = "rain";
        if ($thing == 166) $title = "7-weights";
        if ($thing == 167) $title = "fall";
        if ($thing == 168) $title = "bore-ral";
        if ($thing == 169) $title = "ballade-continuer";
        if ($thing == 170) $title = "Song without a name ver.2007 inst";
        if ($thing == 171) $title = "lie-alaia";
        if ($thing == 172) $title = "Golden Nocturne(inst)";
        if ($thing == 173) $title = "far(flat)";
        if ($thing == 174) $title = "Toybox";
        if ($thing == 175) $title = "terminal entrance";
        if ($thing == 176) $title = "Puppet Show";
        if ($thing == 177) $title = "s/he-end";
        if ($thing == 179) $title = "Song without a name full-inst";
        if ($thing == 180) $title = "The End Of The World";
        if ($thing == 181) $title = "goddess-gardena";
        if ($thing == 183) $title = "ridicule";
        if ($thing == 184) $title = "Yomotsu Hirasaka Corruption";
        if ($thing == 185) $title = "the executioner";
        if ($thing == 186) $title = "Song without a name ver.sakura ED-size";
        if ($thing == 187) $title = "Stuffed Animal";
        if ($thing == 188) $title = "Bizarre Divertimento";
        if ($thing == 190) $title = "en-counse";
        if ($thing == 191) $title = "lixAxil";
        if ($thing == 192) $title = "Revelations(inst)";
        if ($thing == 193) $title = "Flying";
        if ($thing == 194) $title = "lastendconductor";
        if ($thing == 195) $title = "Revelations";
        if ($thing == 240) $title = "Cocoon of White Dreams -Ricordando il passato-";
        if ($thing == 241) $title = "When the Seagulls Cry";
        if ($thing == 1000) $title = "SuiSui☆SWEETS(^-^)";
        if ($thing == 1010) $title = "Bring The Fate";
        if ($thing == 1013) $title = "Bring The Fate(Ver chiru)";
        preg_match("/BGM_s_Ch = $thing\s+mov.+\"(.+)\"/", $contents, $subMatches);
        echo $subMatches[1] . " (" . $title . ")"
        break;
    }
}
