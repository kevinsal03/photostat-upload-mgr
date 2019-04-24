#!/bin/#!/usr/bin/env bash
echo "Switching to production mode!"
echo prod > switches/env
date +"%Y-%m-%d %T" > switches/prodbt
echo "done!"
