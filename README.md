# TouchOSC layouts for remote controlling Hauptwerk with an iPhone 5/SE

- [Download](#download)
- [Tips](#tips)
    - [Connection on OSX](#connection-on-osx)
    - [Autodetecting](#autodetecting)
        - [Local feedback off](#local-feedback-off)
- [Screenshots](#screenshots)
    - [St. Anne's Moseley](#st-annes-moseley)

## Download

The layouts can be downloaded [here](touchosc).

## Tips

There are a lot of quirks to make it work smoothly. Here are the main ones.

### Connection on OSX

TouchOSC Bridge and CoreMIDI Network sessions didn't work for me. CoreMIDI with Bluetooth is not mentionned in the  [official documentation](http://hexler.net/docs/touchosc-configuration-connections-coremidi) but works much better if you can use it. Just get one of the many [IOS bluetooth MIDI apps](https://www.google.com/search?q=IOS+bluetooth+MIDI+app) and connect to your phone in the OSX's Audio MIDI Setup utility. You will then see a bluetooth MIDI device to connect to in the CoreMIDI settings of TouchOSC.

### Autodetecting

#### Local feedback off

Some controls in these layouts have their [_Local feedback off_](http://hexler.net/docs/touchosc-controls-reference#push) property turned on. This is the best configuration for using them, but not for initially autodetecting them in Hauptwerk.

Before autodetecting your layout the first time, you should [edit](http://hexler.net/docs/touchosc-editor) the layout and enable feedback for these controls by unticking their _Local feedback off_ property. 

If you don't want to edit the layout, you will have to manually adjust the settings after autodetecting them in Hauptwerk. The most likely autodetection errors to correct will be to:
- Change the input type from _Momentary piston_ to _Stop or hold piston: MIDI control change-on/off_
- Enable primary output

After autodetection you should edit the layout again and disable feedback by ticking the _Local feedback off_ property.

**This is needed only for the controls that have the _Local feedback off_ checked. The other ones will autodetect fine as they are.**

## Screenshots

### St. Anne's Moseley

![img_5564](https://cloud.githubusercontent.com/assets/1298013/21754854/cd817a42-d5d6-11e6-8a72-3267fa31028b.PNG)
![img_5565](https://cloud.githubusercontent.com/assets/1298013/21754855/cd887d7e-d5d6-11e6-81b0-022becb189b4.PNG)
![img_5566](https://cloud.githubusercontent.com/assets/1298013/21754856/cd897ce2-d5d6-11e6-9011-0095a72809b4.PNG)
![img_5567](https://cloud.githubusercontent.com/assets/1298013/21754859/cd8d360c-d5d6-11e6-825d-31b5f52948e4.PNG)
![img_5568](https://cloud.githubusercontent.com/assets/1298013/21754857/cd8aa96e-d5d6-11e6-8bc7-9772542fea74.PNG)
![img_5569](https://cloud.githubusercontent.com/assets/1298013/21754860/cd8d6bcc-d5d6-11e6-9722-e66ab29a3a09.PNG)
![img_5570](https://cloud.githubusercontent.com/assets/1298013/21754858/cd8b6d5e-d5d6-11e6-8f09-ccb5a1a8d327.PNG)
