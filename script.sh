#!/bin/bash

# Set the directory containing the images
IMAGE_DIR="./images"

# Output file
OUTPUT_FILE="images.json"

# Start JSON array
echo "[" > "$OUTPUT_FILE"

# Find .jpg files and loop through them
find "$IMAGE_DIR" -type f -iname "*.jpg" | sort | while read -r file; do
  filename=$(basename "$file")
  echo "  \"$filename\"," >> "$OUTPUT_FILE"
done

# Remove the last comma and close the JSON array
# This trims the final comma using sed
sed -i '' '$ s/,$//' "$OUTPUT_FILE"
echo "]" >> "$OUTPUT_FILE"

echo "✅ images.json generated with $(wc -l < "$OUTPUT_FILE") entries."
