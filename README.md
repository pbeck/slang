**Note:** as of October 2018 this plugin is no longer actively maintained

# slang

Simple Language twig plugin for Craft templates

Built by [Pelle Beckman](http://beckman.io)

Tested on Craft 2.6

## Installing

1. Copy the `slang` directory into your `craft/plugins` directory
2. Browse to Settings > Plugins in the Craft CP
3. Click on the Install button next to Slang

## Usage

```slang(mixed defaultValue, dictionary localizedStrings)```


## Example

```{{ slang("Default string" ,
		{'sv': "Beskrivning på Svenska",
		'en': "Description in English",
		'jp': "片仮名, カタカナ"}) }}```
		

## Known issues

Slang selects a language to use from its order in the HTTP_ACCEPT_LANGUAGE array – it (currently) does not observe the quality parameter (i.e. "sv,en;q=0.8,en-US;q=0.6")


## Updates

* 1.0.0
	* Initial release!
