---
layout: post
date: 2020-02-28 14:31:48-07:00
updated: 2024-04-28 16:06:14-06:00
title: Subaru STARLINK Doesn't Show My Wireless Network
description: >-
  Notes on connecting the Subaru STARLINK system to a home wireless
  network (e.g. for firmware updates).
tags: []
---

Some quick notes about connecting [Subaru
STARLINK](https://www.subaru.com/engineering/starlink/overview.html) to a home
wireless network (e.g. for firmware updates):

<!--more-->

* **Only password-protected networks** are shown in the available Wi-Fi
  Settings networks list.  I have not found a way to connect to open
  networks.
* **Only channel 149 and 157** work for 40MHz wide channels in the 5GHz band.
  I tested 36, 44, 52, 60, 100, 108, 116, 124, 132, 140, 149, and 157.  Only
  the last two were shown in the Wi-Fi Settings networks list.
* **5 underscores is "saved".**  Instead of the fan-shaped signal
  strength indicator, the Wi-Fi Settings network list shows 5 underscores to
  indicate a known/saved network which is not in range.
* "**Please Connect to a Wi-Fi Access Point** or connect your mobile device
  and run the Aha Radio application (version 5 or later) to check for updates."
  error message is displayed during "Check for Updates" even when it is
  connected to a wireless network.  This is a generic "can't connect to update
  server" message which could be caused by low signal strength, or any other
  network issue. It is not necessarily a wireless connection issue.

These issues together significantly complicated the connecting and
troubleshooting process for me.  I hope that by reading this you can more
easily correct or avoid these issues.  Good luck!
