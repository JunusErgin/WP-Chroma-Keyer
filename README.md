# WP-Chroma-Keyer
A Wordpress plugin to insert a video and remove its background color. The removed color will be transparent. You can simply specify the minimum and a maximum RGB code, you want to filter.

# Getting started
- Download the plugin and upload the zip file to your Wordpress just like every plugin.
- Activate the plugin
- Include your video and specify the RGB range you want to filter using the following directive:

```bash
[chroma-keyer 
  src="https://link-to-your-video.com/yourvideo.mp4" 
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

# API Documentation

| Attribute        | Description           | Possible values  | Default value  |
| ------------- |:-------------:| -----:|-----:|
| preload     | 	Preload the video or stream it by applying | auto, metadata, none | none |
| min-r     | The minimum red part you want to keep in your video.| 0, ..., 255 | 0 |
| min-g     | The minimum green part you want to keep in your video.| 0, ..., 255 |  0 |
| min-b    | The minimum blue part you want to keep in your video.| 0, ..., 255 | 0  |
| max-r     | The maximum red part you want to keep in your video.| 0, ..., 255 | 0  |
| max-g     | The maximum green part you want to keep in your video.| 0, ..., 255 | 0 |
| max-b     | The maximum blue part you want to keep in your video.| 0, ..., 255 | 0 |
| height     | The height of your video in px.| 0, ... | 720 |
| width     | The width of your video in px.| 0, ... | 960 |

# Error handling
Sometimes it is hard to find the exact color range. Videos often don't render with the same RGB schema that the Browser uses. 
I recommend to render the videos with a black background (RGB-code 0,0,0) and enlight all video colors a little bit. Than filter for `max-r="1"`, `max-g="1"`, `max-b="1"`.  


# Problems / Bugs
Please create a an issue. I'll try to fix the problem with you.

## Contributors

- <a href="https://github.com/kelyane">Kelyane</a>
