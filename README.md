# AzTracker 3D - Holographic Pattern Edition

AzTracker 3D is an immersive, web-based tracker music player and 3D visualizer built with Three.js, Web Audio API, and the webaudio-mod-player engine. It renders a futuristic holographic tracker interface alongside a reactive 3D audio spectrum ring and a deep-space starfield.

Demo: https://azraelpc.com/mods/

<img width="800" alt="{91D57510-32D1-4006-8FE6-C1CDC81F4405}" src="https://github.com/user-attachments/assets/b0ff20b1-fd50-4096-a821-c8d0078c3280" />


---

## Features

* Holographic 3D Tracker Matrix: Real-time rendering of tracker rows, notes, and channels mapped onto a 3D perspective plane in Three.js.
* Multi-Format Tracker Support: Powered by dedicated engines for classic module formats (.MOD, .S3M, .FT2).
* Interactive Pattern Navigation: 
  * Left Click on the pattern display to skip forward.
  * Right Click to jump backward.
* Smart Anti-Hang / Panic System: Automatically cleans up and cuts off lingering voice channels when switching patterns or stopping playback to prevent hanging notes.
* Robust Automated Watchdog & Flow Control:
  * Automatically detects and skips empty patterns or completely blank files.
  * Includes a playback watchdog that detects frozen files stuck on Row 0 and gracefully skips to the next track.
* Pro Controls & UI (lil-gui): Fully tweakable camera positions, visual heights, ring radius, star sizes, master volumes, stereo separation, and Amiga audio filters.
* File Browser & Playlist Management: Built-in recursive directory browser supporting sequential playback and Shuffle Mode.

---

## Tech Stack

* Frontend Framework: Vanilla JavaScript, HTML5, CSS3, jQuery 1.9.0
* 3D Graphics & Rendering: Three.js (r128) with OrbitControls
* Audio Engine: Custom Web Audio mod player (webaudio-mod-player engine for ProTracker, ScreamTracker, and FastTracker 2)
* UI Controls: lil-gui

---

## Quick Start / Installation

1. Clone or download this repository to your local web server environment (Apache/Nginx with PHP support, since it uses an api.php backend endpoint to scan the /music folder).
2. Ensure your module files are structured inside a /music directory at the root of the project.
3. Open index.html via your local server URL in a modern web browser.
4. Click anywhere on the screen to initialize the Web Audio context, pick a module from the sidebar, and enjoy the experience!
