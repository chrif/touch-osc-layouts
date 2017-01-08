# TouchOSC layouts for remote controlling Hauptwerk with an iPhone 5/SE

## Tips

There are a lot of quirks to make it work smoothly. Here are the main ones.

### Connection

TouchOSC Bridge and CoreMIDI Network sessions didn't work for me. CoreMIDI with Bluetooth is not mentionned in the  [official documentation](http://hexler.net/docs/touchosc-configuration-connections-coremidi) but works much better if you can use it. Just get one of the many [IOS bluetooth MIDI apps](https://www.google.com/search?q=IOS+bluetooth+MIDI+app) and connect to your phone in the OSX's Audio MIDI Setup utility. You will then see a bluetooth MIDI device to connect to in the CoreMIDI settings of TouchOSC.

### Auto-detecting

Some controls in these layouts have their [_Local feedback off_](http://hexler.net/docs/touchosc-controls-reference#push) property turned on. This is the best configuration for using them, but not for initially auto-detecting them in Hauptwerk. 

When auto-detecting, you should [edit](http://hexler.net/docs/touchosc-editor) the layout and enable feedback. If you don't want to edit the layout, you will have to manually enable output for these controls after auto-detecting them in Hauptwerk.
