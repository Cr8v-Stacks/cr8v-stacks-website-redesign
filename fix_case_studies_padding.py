import os
import glob

case_study_dir = r'Case Studies'
files = glob.glob(os.path.join(case_study_dir, '*.html'))

changed = 0
for fpath in files:
    with open(fpath, encoding='utf-8', errors='replace') as f:
        content = f.read()
    
    original = content
    
    # Change 1: c8cs-gallery-section padding
    content = content.replace(
        '.c8cs-gallery-section {\n      padding: 6rem 0;\n      background: #FFFFFF;\n      border-bottom: 1px solid var(--c8-grid-line);\n    }',
        '.c8cs-gallery-section {\n      padding: 0 0 3rem;\n      background: #FFFFFF;\n      border-bottom: 1px solid var(--c8-grid-line);\n    }'
    )
    # Also try with \r\n
    content = content.replace(
        '.c8cs-gallery-section {\r\n      padding: 6rem 0;\r\n      background: #FFFFFF;\r\n      border-bottom: 1px solid var(--c8-grid-line);\r\n    }',
        '.c8cs-gallery-section {\r\n      padding: 0 0 3rem;\r\n      background: #FFFFFF;\r\n      border-bottom: 1px solid var(--c8-grid-line);\r\n    }'
    )
    
    # Change 2: c8cs-wrap padding
    content = content.replace(
        '    .c8cs-wrap {\n      max-width: 1340px;\n      margin: 0 auto;\n      padding: 5rem 2rem;\n      position: relative;\n      z-index: 2;\n    }',
        '    .c8cs-wrap {\n      max-width: 1340px;\n      margin: 0 auto;\n      padding: 3rem 2rem 5rem;\n      position: relative;\n      z-index: 2;\n    }'
    )
    content = content.replace(
        '    .c8cs-wrap {\r\n      max-width: 1340px;\r\n      margin: 0 auto;\r\n      padding: 5rem 2rem;\r\n      position: relative;\r\n      z-index: 2;\r\n    }',
        '    .c8cs-wrap {\r\n      max-width: 1340px;\r\n      margin: 0 auto;\r\n      padding: 3rem 2rem 5rem;\r\n      position: relative;\r\n      z-index: 2;\r\n    }'
    )
    
    if content != original:
        with open(fpath, 'w', encoding='utf-8') as f:
            f.write(content)
        changed += 1
        print(f'Updated: {os.path.basename(fpath)}')

print(f'\nTotal files updated: {changed}')
