![Build Status](https://codebuild.ap-southeast-2.amazonaws.com/badges?uuid=eyJlbmNyeXB0ZWREYXRhIjoiNUVreWpTNHBDM2ZJaE53VEE1TFFCSyszbndtSkpqMEdIcDhScHZjZHhZTU9oR2hpMVRxakcxMnp6UENJN1c3enFoa1hLRnY2U1h0UFAvdHBqcFh5ejFzPSIsIml2UGFyYW1ldGVyU3BlYyI6IkVGcnlWVk1IV1hDK2czZUIiLCJtYXRlcmlhbFNldFNlcmlhbCI6MX0%3D&branch=master)


# docker

This repository is for Docker playground and demos. Self learning material.


## ecs-params.yml file
Create a local ecs-params.yml file to configure local values for your AWS account values.
Check ecs-params.sample.yml file and use it as an template.

## SSM parameters 
You will need to create following SSM paramter to refer that into the buildspec:
1. account_id: your account Id
2. ECSStackDBName: database name for wordpress
3. MasterUsername: for database username
4. MasterUserPassword: for database user password
