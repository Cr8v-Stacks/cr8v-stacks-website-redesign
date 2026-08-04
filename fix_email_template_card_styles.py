import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\contact_email_template.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Remove left border from message cell and apply clean paper card styling
old_msg_cell = r'<td style="padding:14px 16px;background:#FAFAF7;border-left:3px solid #0047E1;font-size:14px;line-height:1.65;color:#080808;border-radius:3px;">'
new_msg_cell = '<td style="padding:14px 16px;background:#FFFFFF;border:1px solid rgba(8,8,8,0.12);font-size:14px;line-height:1.65;color:#080808;border-radius:4px;">'

content = content.replace(old_msg_cell, new_msg_cell)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated contact_email_template.html message box styling.")
