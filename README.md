# WP-Chroma-Keyer
A Wordpress plugin to insert a video and remove its background color. The removed color will be transparent. You can simply specify a minimum and a maximum RGB code, you want to filter.

# Getting started
- Download the plugin and upload the zip file to your Wordpress just like every plugin.
- Activate the plugin
- Include your video and specify the RGB range you want to filter using the following directive:

```bash
[chroma-keyer 
  src="https://linkto-your-video.com/yourvideo.mp4" 
  placeholder="https://placeholder-before-video-starts.com/placeholder.png" 
  min-r="0" 
  min-g="0" 
  min-b="0" 
  max-r="5" 
  max-g="5" 
  max-b="5" 
  height="848" 
  width="415"]
```
The directive includes a video to your page and turns all colors between rgb(0,0,0) and rgb(5,5,5) transparent.

# Problems / Bugs
Please create a an issue. I'll try to fix the problem with you.

## Contributors

- <a href="https://github.com/kelyane">Kelyane</a>
