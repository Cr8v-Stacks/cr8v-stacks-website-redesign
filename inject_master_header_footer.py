import os
import glob

root_dir = r"c:\Users\HP\Downloads\Mega Menu"

def get_header_html(rel_prefix):
    h = f"""
  <!-- MASTER MODERNIZED AGENCY NAVIGATION HEADER -->
  <div class="c8hdr-root">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap');

    .c8hdr-root, .c8hdr-root * {{box-sizing:border-box!important;}}
    .c8hdr-root a {{text-decoration:none!important;color:inherit!important;}}
    .c8hdr-root ul {{list-style:none!important;margin:0!important;padding:0!important;}}
    .c8hdr-root button {{font-family:'DM Sans',sans-serif!important;}}

    /* ── Header shell ── */
    .c8hdr-root .c8-header {{
      position:fixed!important;top:0!important;left:0!important;right:0!important;
      z-index:9500!important;height:68px!important;
      background:#FAFAF7!important;border-bottom:1px solid rgba(8,8,8,0.06)!important;
      transition:box-shadow .3s!important;
    }}
    .c8hdr-root .c8-header.c8-scrolled {{box-shadow:0 4px 40px rgba(0,0,0,0.07)!important;}}

    body.admin-bar .c8hdr-root .c8-header {{top:32px!important;}}
    body.admin-bar .c8hdr-root .c8-mega, body.admin-bar .c8hdr-root .c8-mega-back {{top:calc(68px + 32px)!important;}}
    body.admin-bar .c8hdr-root .c8-md-drawer, body.admin-bar .c8hdr-root .c8-md-overlay {{top:32px!important;}}
    @media (max-width:782px){{
      body.admin-bar .c8hdr-root .c8-header {{top:46px!important;}}
      body.admin-bar .c8hdr-root .c8-md-drawer, body.admin-bar .c8hdr-root .c8-md-overlay {{top:46px!important;}}
    }}

    .c8hdr-root .c8hdr-inner {{
      max-width:1440px!important;margin:0 auto!important;height:68px!important;
      padding:0 3.5rem!important;display:flex!important;align-items:center!important;
      justify-content:space-between!important;gap:1.5rem!important;
    }}
    @media (max-width:1100px){{ .c8hdr-root .c8hdr-inner {{padding:0 1.25rem!important;}} }}

    /* ── Brand Logo (Official Image Logo) ── */
    .c8hdr-root .c8-logo {{
      display:flex!important;align-items:center!important;gap:10px!important;
      flex-shrink:0!important;text-decoration:none!important;
    }}
    .c8hdr-root .c8-logo-img {{
      display:block!important;height:44px!important;width:auto!important;max-width:none!important;
    }}

    /* ── Primary nav — capsule pill (desktop) ── */
    .c8hdr-root .c8-pnav {{
      display:flex!important;align-items:center!important;gap:2px!important;
      background:#F3F2EC!important;border-radius:999px!important;padding:4px!important;height:46px!important;
    }}
    .c8hdr-root .c8-pnav-item {{position:static!important;}}
    .c8hdr-root .c8-pnav-link {{
      display:flex!important;align-items:center!important;gap:4px!important;
      font-size:13.5px!important;font-weight:500!important;color:#080808!important;
      padding:0 1.1rem!important;height:38px!important;letter-spacing:.01em!important;
      cursor:pointer!important;position:relative!important;border-radius:999px!important;
      transition:background .2s ease,color .2s ease,box-shadow .2s ease!important;
      white-space:nowrap!important;user-select:none!important;font-family:'DM Sans',sans-serif!important;
    }}
    .c8hdr-root .c8-pnav-link:hover, .c8hdr-root .c8-pnav-link.c8-open {{
      background:#FFFFFF!important;color:#0047E1!important;box-shadow:0 2px 10px rgba(8,8,8,0.07)!important;
    }}
    .c8hdr-root .c8-chev {{width:11px!important;height:11px!important;opacity:.5!important;transition:transform .22s ease,opacity .2s!important;flex-shrink:0!important;stroke:currentColor!important;}}
    .c8hdr-root .c8-pnav-link.c8-open .c8-chev {{transform:rotate(180deg)!important;opacity:1!important;}}
    @media (max-width:1100px){{ .c8hdr-root .c8-pnav {{display:none!important;}} }}

    /* ── Header Right & Option G CTA ── */
    .c8hdr-root .c8hdr-right {{display:flex!important;align-items:center!important;gap:.9rem!important;flex-shrink:0!important;}}
    .c8hdr-root .c8-btn-cta {{
      position:relative!important;overflow:hidden!important;
      display:inline-flex!important;align-items:center!important;justify-content:center!important;
      gap:8px!important;font-family:'DM Sans',sans-serif!important;
      font-size:12.5px!important;font-weight:600!important;color:#FAFAF7!important;
      background:#0047E1!important;padding:0 1.4rem!important;height:40px!important;
      border-radius:999px!important;letter-spacing:.03em!important;white-space:nowrap!important;
      transition:background 0.25s ease, transform 0.2s ease, box-shadow 0.25s ease!important;
      box-shadow: 0 4px 14px rgba(0, 71, 225, 0.28)!important;
    }}
    .c8hdr-root .c8-btn-cta::before {{
      content:''!important;position:absolute!important;top:0!important;left:-100%!important;
      width:60%!important;height:100%!important;
      background:linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent)!important;
      transform:skewX(-20deg)!important;
      transition:left 0.65s ease!important;
    }}
    .c8hdr-root .c8-btn-cta:hover {{
      background:#0038C0!important;transform:translateY(-1px)!important;
      box-shadow:0 8px 24px rgba(0, 71, 225, 0.38)!important;
    }}
    .c8hdr-root .c8-btn-cta:hover::before {{ left:180%!important; }}
    @media (max-width:1100px){{ .c8hdr-root .c8-btn-cta {{display:none!important;}} }}

    .c8hdr-root .c8-hbg {{display:none!important;flex-direction:column!important;gap:5px!important;padding:10px!important;cursor:pointer!important;background:none!important;border:none!important;margin-left:.25rem!important;}}
    .c8hdr-root .c8-hbg span {{display:block!important;width:22px!important;height:1.5px!important;background:#080808!important;transition:all .25s!important;}}
    .c8hdr-root .c8-hbg.c8-open span:nth-child(1){{transform:rotate(45deg) translate(4.5px,4.5px)!important;}}
    .c8hdr-root .c8-hbg.c8-open span:nth-child(2){{opacity:0!important;transform:scaleX(0)!important;}}
    .c8hdr-root .c8-hbg.c8-open span:nth-child(3){{transform:rotate(-45deg) translate(4.5px,-4.5px)!important;}}
    @media (max-width:1100px){{ .c8hdr-root .c8-hbg {{display:flex!important;}} }}

    /* ── Mega Menu Backdrop ── */
    .c8hdr-root .c8-mega-back {{
      position:fixed!important;top:68px!important;left:0!important;right:0!important;bottom:0!important;
      background:rgba(8,8,8,0.18)!important;z-index:9400!important;
      opacity:0!important;pointer-events:none!important;transition:opacity .3s ease!important;
    }}
    .c8hdr-root .c8-mega-back.c8-show {{opacity:1!important;pointer-events:auto!important;}}

    /* ── Mega Menu Shell — floating, centered, rounded card ── */
    .c8hdr-root .c8-mega {{
      position:fixed!important;top:68px!important;left:0!important;right:0!important;z-index:9450!important;
      display:flex!important;justify-content:center!important;padding-top:14px!important;
      background:transparent!important;pointer-events:none!important;
      opacity:0!important;transform:translateY(-8px)!important;
      transition:transform .3s cubic-bezier(.4,0,.2,1),opacity .25s ease!important;
    }}
    .c8hdr-root .c8-mega.c8-open {{transform:translateY(0)!important;opacity:1!important;pointer-events:auto!important;}}
    @media (max-width:1100px){{ .c8hdr-root .c8-mega, .c8hdr-root .c8-mega-back {{display:none!important;}} }}

    .c8hdr-root .c8-mega-card {{
      background:#FFFFFF!important;width:min(1280px, calc(100% - 4rem))!important;
      border-radius:22px!important;border:1px solid rgba(8,8,8,0.07)!important;
      box-shadow:0 30px 80px rgba(8,8,8,0.16)!important;overflow:hidden!important;pointer-events:auto!important;
    }}

    .c8hdr-root .c8-mega-grid {{display:grid!important;}}
    .c8hdr-root .c8-mega-grid-services {{grid-template-columns:0.95fr 0.85fr 0.85fr 0.55fr!important;}}
    .c8hdr-root .c8-mega-grid-tools {{grid-template-columns:0.95fr 1.3fr 0.55fr!important;}}

    .c8hdr-root .c8-mcol-intro, .c8hdr-root .c8-mcol-list, .c8hdr-root .c8-mcol-list-wide {{
      padding:2.1rem 1.9rem!important;border-right:1px solid rgba(8,8,8,0.06)!important;
    }}
    .c8hdr-root .c8-mcol-deco {{padding:2.1rem 1.4rem!important;}}

    .c8hdr-root .c8-mcol-eyebrow {{
      font-family:'Space Mono',monospace!important;font-size:9.5px!important;letter-spacing:.28em!important;
      text-transform:uppercase!important;color:#0047E1!important;margin-bottom:1.1rem!important;
      display:flex!important;align-items:center!important;gap:8px!important;
    }}
    .c8hdr-root .c8-mcol-eyebrow::before {{content:''!important;width:14px!important;height:1px!important;background:#0047E1!important;display:inline-block!important;flex-shrink:0!important;}}

    .c8hdr-root .c8-mcol-heading {{font-family:'Michroma',sans-serif!important;font-size:1.5rem!important;line-height:1.25!important;color:#080808!important;margin-bottom:.85rem!important;}}
    .c8hdr-root .c8-mcol-desc {{font-size:12.5px!important;color:#7A7A75!important;line-height:1.65!important;font-weight:400!important;margin-bottom:1.6rem!important;max-width:260px!important;}}

    .c8hdr-root .c8-highlight-card {{
      display:block!important;background:#F4F3EE!important;border-radius:14px!important;
      padding:1.1rem 1.2rem!important;transition:background .18s ease,transform .18s ease!important;
    }}
    .c8hdr-root .c8-highlight-card:hover {{background:#EBEAE3!important;transform:translateY(-2px)!important;}}
    .c8hdr-root .c8-highlight-ico {{
      width:30px!important;height:30px!important;background:#FFFFFF!important;border-radius:999px!important;
      display:flex!important;align-items:center!important;justify-content:center!important;margin-bottom:.75rem!important;
      box-shadow:0 1px 3px rgba(8,8,8,0.08)!important;
    }}
    .c8hdr-root .c8-highlight-ico svg {{width:14px!important;height:14px!important;stroke:#0047E1!important;stroke-width:1.8!important;fill:none!important;}}
    .c8hdr-root .c8-highlight-title {{font-size:13px!important;font-weight:600!important;color:#080808!important;margin-bottom:4px!important;}}
    .c8hdr-root .c8-highlight-desc {{font-size:11.5px!important;color:#7A7A75!important;line-height:1.55!important;font-weight:400!important;margin-bottom:.7rem!important;}}
    .c8hdr-root .c8-highlight-link {{font-size:11.5px!important;font-weight:600!important;color:#0047E1!important;}}

    .c8hdr-root .c8-svc2-list {{margin-top:1.5rem!important;display:flex!important;flex-direction:column!important;gap:1.35rem!important;}}
    .c8hdr-root .c8-svc2-row {{display:flex!important;align-items:flex-start!important;gap:11px!important;}}
    .c8hdr-root .c8-svc2-ico {{
      width:26px!important;height:26px!important;background:#EEF3FF!important;border-radius:8px!important;
      display:flex!important;align-items:center!important;justify-content:center!important;flex-shrink:0!important;
      margin-top:1px!important;transition:background .18s!important;
    }}
    .c8hdr-root .c8-svc2-row:hover .c8-svc2-ico {{background:#0047E1!important;}}
    .c8hdr-root .c8-svc2-ico svg {{width:12.5px!important;height:12.5px!important;stroke:#0047E1!important;stroke-width:1.75!important;fill:none!important;transition:stroke .18s!important;}}
    .c8hdr-root .c8-svc2-row:hover .c8-svc2-ico svg {{stroke:#FFFFFF!important;}}
    .c8hdr-root .c8-svc2-name {{font-size:13.5px!important;font-weight:600!important;color:#080808!important;margin-bottom:2px!important;transition:color .18s!important;}}
    .c8hdr-root .c8-svc2-row:hover .c8-svc2-name {{color:#0047E1!important;}}
    .c8hdr-root .c8-svc2-desc {{font-size:11.5px!important;color:#8A8A85!important;line-height:1.4!important;font-weight:400!important;}}

    .c8hdr-root .c8-tool2-list {{margin-top:1.5rem!important;display:flex!important;flex-direction:column!important;gap:1.6rem!important;}}
    .c8hdr-root .c8-tool2-row {{display:flex!important;align-items:flex-start!important;gap:14px!important;}}
    .c8hdr-root .c8-tool2-ico {{
      width:32px!important;height:32px!important;background:#EEF3FF!important;border-radius:10px!important;
      display:flex!important;align-items:center!important;justify-content:center!important;flex-shrink:0!important;
      transition:background .18s!important;
    }}
    .c8hdr-root .c8-tool2-row:hover .c8-tool2-ico {{background:#0047E1!important;}}
    .c8hdr-root .c8-tool2-ico svg {{width:15px!important;height:15px!important;stroke:#0047E1!important;stroke-width:1.75!important;fill:none!important;transition:stroke .18s!important;}}
    .c8hdr-root .c8-tool2-row:hover .c8-tool2-ico svg {{stroke:#FFFFFF!important;}}
    .c8hdr-root .c8-tool2-name {{font-size:14px!important;font-weight:600!important;color:#080808!important;margin-bottom:3px!important;transition:color .18s!important;}}
    .c8hdr-root .c8-tool2-row:hover .c8-tool2-name {{color:#0047E1!important;}}
    .c8hdr-root .c8-tool2-desc {{font-size:12px!important;color:#8A8A85!important;line-height:1.55!important;font-weight:400!important;margin-bottom:5px!important;}}
    .c8hdr-root .c8-tool2-link {{font-size:11.5px!important;font-weight:600!important;color:#0047E1!important;opacity:0!important;transform:translateY(-2px)!important;transition:all .18s!important;}}
    .c8hdr-root .c8-tool2-row:hover .c8-tool2-link {{opacity:1!important;transform:translateY(0)!important;}}

    .c8hdr-root .c8-deco-grid {{
      display:grid!important;grid-template-columns:repeat(3,1fr)!important;gap:10px 8px!important;margin-top:.2rem!important;
      font-family:'Space Mono',monospace!important;
    }}
    .c8hdr-root .c8-deco-tok {{font-size:9.5px!important;color:rgba(8,8,8,0.18)!important;white-space:nowrap!important;}}
    .c8hdr-root .c8-deco-tok.c8-deco-hi {{color:#0047E1!important;font-weight:700!important;}}
    .c8hdr-root .c8-deco-tok.c8-deco-hi2 {{color:#080808!important;font-weight:700!important;}}

    /* ── Established Mobile & Tablet Drawer UI (2-Column Icon Grid) ── */
    .c8hdr-root .c8-md-overlay {{position:fixed!important;inset:0!important;background:rgba(8,8,8,0.5)!important;z-index:9600!important;opacity:0!important;pointer-events:none!important;transition:opacity .3s!important;}}
    .c8hdr-root .c8-md-overlay.c8-show {{opacity:1!important;pointer-events:auto!important;}}
    .c8hdr-root .c8-md-drawer {{
      position:fixed!important;inset:0!important;z-index:9700!important;
      background:#FAFAF7!important;transform:translateX(100%)!important;
      transition:transform .38s cubic-bezier(.4,0,.2,1)!important;
      display:flex!important;flex-direction:column!important;overflow:hidden!important;
    }}
    .c8hdr-root .c8-md-drawer.c8-open {{transform:translateX(0)!important;}}

    .c8hdr-root .c8-md-hero {{background:#080808!important;flex-shrink:0!important;position:relative!important;overflow:hidden!important;padding-bottom:1.25rem!important;}}
    .c8hdr-root .c8-md-hero::before {{
      content:''!important;position:absolute!important;inset:0!important;
      background:radial-gradient(circle at 85% 15%,rgba(0,71,225,0.45) 0%,transparent 55%),radial-gradient(circle at 10% 90%,rgba(0,56,192,0.2) 0%,transparent 50%)!important;
    }}
    .c8hdr-root .c8-md-hero-bar {{
      height:60px!important;padding:0 1.25rem!important;display:flex!important;align-items:center!important;justify-content:space-between!important;
      border-bottom:1px solid rgba(255,255,255,0.1)!important;position:relative!important;z-index:1!important;
    }}
    .c8hdr-root .c8-md-hero-logo-img {{display:block!important;height:42px!important;width:auto!important;filter:brightness(0) invert(1)!important;}}
    .c8hdr-root .c8-md-close {{
      width:34px!important;height:34px!important;display:flex!important;align-items:center!important;justify-content:center!important;
      background:rgba(255,255,255,0.08)!important;border:1px solid rgba(255,255,255,0.15)!important;cursor:pointer!important;
      flex-shrink:0!important;padding:0!important;line-height:0!important;border-radius:999px!important;
    }}
    .c8hdr-root .c8-md-hero-label {{
      font-family:'Space Mono',monospace!important;font-size:9px!important;letter-spacing:.3em!important;text-transform:uppercase!important;
      color:rgba(255,255,255,0.45)!important;padding:1.1rem 1.25rem 0!important;position:relative!important;z-index:1!important;
    }}

    .c8hdr-root .c8-md-body {{flex:1!important;overflow-y:auto!important;background:#FAFAF7!important;}}
    .c8hdr-root .c8-md-section-label {{
      font-family:'Space Mono',monospace!important;font-size:9px!important;letter-spacing:.32em!important;text-transform:uppercase!important;
      color:#0047E1!important;padding:1.1rem 1.25rem .5rem!important;display:flex!important;align-items:center!important;gap:8px!important;
    }}
    .c8hdr-root .c8-md-section-label::before {{content:''!important;width:14px!important;height:1px!important;background:#0047E1!important;display:block!important;flex-shrink:0!important;}}

    .c8hdr-root .c8-md-grid {{display:grid!important;grid-template-columns:1fr 1fr!important;gap:8px!important;padding:6px 1.25rem 1rem!important;}}
    .c8hdr-root .c8-md-card {{
      display:flex!important;flex-direction:column!important;gap:8px!important;padding:12px 10px!important;
      background:#F4F3EE!important;border:1px solid rgba(8,8,8,0.06)!important;border-radius:4px!important;position:relative!important;overflow:hidden!important;
      transition:background .2s,border-color .2s,transform .2s!important;
    }}
    .c8hdr-root .c8-md-card:hover {{background:rgba(0, 71, 225, 0.04)!important;border-color:rgba(0, 71, 225, 0.2)!important;transform:translateX(3px)!important;}}
    .c8hdr-root .c8-md-card-ico {{width:26px!important;height:26px!important;background:#D6E2FF!important;display:flex!important;align-items:center!important;justify-content:center!important;border-radius:3px!important;}}
    .c8hdr-root .c8-md-card-ico svg {{width:12px!important;height:12px!important;stroke:#0047E1!important;stroke-width:1.75!important;fill:none!important;}}
    .c8hdr-root .c8-md-card-name {{font-size:12px!important;font-weight:500!important;color:#080808!important;}}

    .c8hdr-root .c8-md-plain-links {{padding:4px 1.25rem 8px!important;}}
    .c8hdr-root .c8-md-plain-link {{
      display:flex!important;align-items:center!important;justify-content:space-between!important;
      padding:12px 0!important;border-bottom:1px solid rgba(8,8,8,0.06)!important;
      font-size:14px!important;font-weight:500!important;color:#080808!important;
      transition:color .15s,padding-left .15s!important;
    }}
    .c8hdr-root .c8-md-plain-link:hover {{color:#0047E1!important;padding-left:5px!important;}}

    .c8hdr-root .c8-md-foot {{padding:1rem 1.25rem 1.5rem!important;border-top:1px solid rgba(8,8,8,0.06)!important;background:#FAFAF7!important;flex-shrink:0!important;}}
    .c8hdr-root .c8-md-cta {{
      display:flex!important;align-items:center!important;justify-content:center!important;gap:8px!important;width:100%!important;height:48px!important;
      background:#0047E1!important;color:#FAFAF7!important;font-size:13.5px!important;font-weight:600!important;
      border-radius:999px!important;box-shadow: 0 4px 14px rgba(0,71,225,0.28)!important;
    }}

    @media (max-width:1200px){{
      .c8hdr-root .c8-mcol-deco {{display:none!important;}}
      .c8hdr-root .c8-mega-grid-services {{grid-template-columns:0.95fr 0.85fr 0.85fr!important;}}
      .c8hdr-root .c8-mega-grid-tools {{grid-template-columns:0.95fr 1.3fr!important;}}
      .c8hdr-root .c8-mcol-list:last-child, .c8hdr-root .c8-mcol-list-wide {{border-right:none!important;}}
    }}
    </style>

    <!-- ── Desktop Backdrop ── -->
    <div class="c8-mega-back" id="c8-mega-back"></div>

    <!-- ── Main Site Header ── -->
    <header class="c8-header" id="c8-header">
      <div class="c8hdr-inner">
        <a href="{rel_prefix}home2.html" class="c8-logo">
          <img src="https://cr8vstacks.com/wp-content/uploads/2022/08/1.png" alt="CR8V Stacks" class="c8-logo-img">
        </a>

        <nav>
          <ul class="c8-pnav" id="c8-pnav">
            <li class="c8-pnav-item"><a href="{rel_prefix}home2.html" class="c8-pnav-link">Home</a></li>

            <li class="c8-pnav-item" data-mega="c8-mega-services">
              <span class="c8-pnav-link" tabindex="0">Services
                <svg class="c8-chev" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4"/></svg>
              </span>
            </li>

            <li class="c8-pnav-item"><a href="{rel_prefix}Case Studies/index.html" class="c8-pnav-link">Case Studies</a></li>

            <li class="c8-pnav-item" data-mega="c8-mega-toolkits">
              <span class="c8-pnav-link" tabindex="0">Toolkits
                <svg class="c8-chev" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4"/></svg>
              </span>
            </li>

            <li class="c8-pnav-item"><a href="{rel_prefix}home2.html#dev-playground" class="c8-pnav-link">Dev Playground</a></li>
            <li class="c8-pnav-item"><a href="{rel_prefix}blog.html" class="c8-pnav-link">Blog</a></li>
          </ul>
        </nav>

        <div class="c8hdr-right">
          <a href="{rel_prefix}discovery-call.html" class="c8-btn-cta">
            Get an Estimate →
          </a>
          <button class="c8-hbg" id="c8-hbg" type="button" aria-label="Open menu">
            <span></span><span></span><span></span>
          </button>
        </div>
      </div>
    </header>

    <!-- ── MEGA MENU: Services ── -->
    <div class="c8-mega" id="c8-mega-services">
      <div class="c8-mega-card">
        <div class="c8-mega-grid c8-mega-grid-services">

          <!-- INTRO + FEATURED HIGHLIGHT -->
          <div class="c8-mcol-intro">
            <div class="c8-mcol-eyebrow">// SERVICES</div>
            <div class="c8-mcol-heading">Full-Stack Builds</div>
            <p class="c8-mcol-desc">Design, development and growth systems — customizable enough to run any kind of business online.</p>
            <a href="{rel_prefix}Case Studies/the-duch-apartments.html" class="c8-highlight-card">
              <div class="c8-highlight-ico"><svg viewBox="0 0 24 24"><path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 16.8l-6.2 4.5 2.4-7.4L2 9.4h7.6z"/></svg></div>
              <div class="c8-highlight-title">The Duch Apartments</div>
              <div class="c8-highlight-desc">A bespoke hospitality build with a 100% direct booking engine.</div>
              <span class="c8-highlight-link">Explore case study →</span>
            </a>
          </div>

          <!-- LIST: DESIGN & BUILD -->
          <div class="c8-mcol-list">
            <div class="c8-mcol-eyebrow">DESIGN &amp; BUILD</div>
            <div class="c8-svc2-list">
              <a href="{rel_prefix}Web Design Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
                <div><div class="c8-svc2-name">Website Design</div><div class="c8-svc2-desc">High-converting UI/UX</div></div>
              </a>
              <a href="{rel_prefix}Custom Dev Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg></div>
                <div><div class="c8-svc2-name">Custom Development</div><div class="c8-svc2-desc">Bespoke software architecture</div></div>
              </a>
              <a href="{rel_prefix}E-Commerce Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div>
                <div><div class="c8-svc2-name">E-Commerce</div><div class="c8-svc2-desc">Multi-market storefront scaling</div></div>
              </a>
              <a href="{rel_prefix}Shopify Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0"/></svg></div>
                <div><div class="c8-svc2-name">Shopify</div><div class="c8-svc2-desc">Themes &amp; app integrations</div></div>
              </a>
              <a href="{rel_prefix}WooCommerce Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M6 12l3 3 6-6"/></svg></div>
                <div><div class="c8-svc2-name">WooCommerce</div><div class="c8-svc2-desc">Tailored shopping platforms</div></div>
              </a>
              <a href="{rel_prefix}WordPress Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 00-7.07 17.07l4.07-11.07h6l4.07 11.07A10 10 0 0012 2z"/></svg></div>
                <div><div class="c8-svc2-name">WordPress</div><div class="c8-svc2-desc">Gutenberg &amp; theme architecture</div></div>
              </a>
            </div>
          </div>

          <!-- LIST: STRATEGY & GROWTH -->
          <div class="c8-mcol-list">
            <div class="c8-mcol-eyebrow">STRATEGY &amp; GROWTH</div>
            <div class="c8-svc2-list">
              <a href="{rel_prefix}AI MVP Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8z"/><circle cx="12" cy="12" r="3"/></svg></div>
                <div><div class="c8-svc2-name">AI MVP</div><div class="c8-svc2-desc">Rapid AI prototyping</div></div>
              </a>
              <a href="{rel_prefix}Brand Identity Design Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
                <div><div class="c8-svc2-name">Brand Identity</div><div class="c8-svc2-desc">Logos &amp; design tokens</div></div>
              </a>
              <a href="{rel_prefix}Brand Strategy Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
                <div><div class="c8-svc2-name">Brand Strategy</div><div class="c8-svc2-desc">Positioning &amp; messaging</div></div>
              </a>
              <a href="{rel_prefix}Digital Marketing Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                <div><div class="c8-svc2-name">Digital Marketing</div><div class="c8-svc2-desc">Paid campaigns &amp; CRO</div></div>
              </a>
              <a href="{rel_prefix}SEO and Content Service Page/index.html" class="c8-svc2-row">
                <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
                <div><div class="c8-svc2-name">SEO &amp; Content</div><div class="c8-svc2-desc">Entity SEO &amp; organic authority</div></div>
              </a>
            </div>
          </div>

          <!-- DECORATIVE CODE-GRID FLOURISH -->
          <div class="c8-mcol-deco">
            <div class="c8-mcol-eyebrow">// STACK</div>
            <div class="c8-deco-grid">
              <span class="c8-deco-tok">&lt;div&gt;</span><span class="c8-deco-tok c8-deco-hi">flex</span><span class="c8-deco-tok">01</span>
              <span class="c8-deco-tok">#0047</span><span class="c8-deco-tok">grid</span><span class="c8-deco-tok c8-deco-hi2">{{ }}</span>
              <span class="c8-deco-tok">svg</span><span class="c8-deco-tok">0x4A</span><span class="c8-deco-tok">cta</span>
              <span class="c8-deco-tok c8-deco-hi">git</span><span class="c8-deco-tok">z-9</span><span class="c8-deco-tok">rem</span>
              <span class="c8-deco-tok">api</span><span class="c8-deco-tok">02</span><span class="c8-deco-tok c8-deco-hi2">&lt;/&gt;</span>
              <span class="c8-deco-tok">json</span><span class="c8-deco-tok">wp_</span><span class="c8-deco-tok">gap</span>
              <span class="c8-deco-tok c8-deco-hi">seo</span><span class="c8-deco-tok">img</span><span class="c8-deco-tok">03</span>
              <span class="c8-deco-tok">#FAF</span><span class="c8-deco-tok c8-deco-hi2">px</span><span class="c8-deco-tok">dev</span>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- ── MEGA MENU: Toolkit ── -->
    <div class="c8-mega" id="c8-mega-toolkits">
      <div class="c8-mega-card">
        <div class="c8-mega-grid c8-mega-grid-tools">

          <div class="c8-mcol-intro">
            <div class="c8-mcol-eyebrow">// TOOLKIT</div>
            <div class="c8-mcol-heading">Build Smarter</div>
            <p class="c8-mcol-desc">Free interactive tools that price your project and show our work before you ever book a call.</p>
            <a href="{rel_prefix}discovery-call.html" class="c8-highlight-card">
              <div class="c8-highlight-ico"><svg viewBox="0 0 24 24"><path d="M12 2v20M2 12h20"/></svg></div>
              <div class="c8-highlight-title">Instant Scope Estimate</div>
              <div class="c8-highlight-desc">Get a formulaic price and stack recommendation in minutes.</div>
              <span class="c8-highlight-link">Calculate your scope →</span>
            </a>
          </div>

          <div class="c8-mcol-list-wide">
            <div class="c8-mcol-eyebrow">AVAILABLE TOOLS</div>
            <div class="c8-tool2-list">
              <a href="{rel_prefix}discovery-call.html" class="c8-tool2-row">
                <div class="c8-tool2-ico"><svg viewBox="0 0 24 24"><path d="M12 2v20M2 12h20"/></svg></div>
                <div>
                  <div class="c8-tool2-name">Scope Estimator</div>
                  <div class="c8-tool2-desc">Calculate your interactive project scope, formulaic pricing, and technology stack requirements.</div>
                  <span class="c8-tool2-link">Calculate your scope →</span>
                </div>
              </a>
              <a href="{rel_prefix}home2.html#dev-playground" class="c8-tool2-row">
                <div class="c8-tool2-ico"><svg viewBox="0 0 24 24"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg></div>
                <div>
                  <div class="c8-tool2-name">Dev Playground</div>
                  <div class="c8-tool2-desc">Explore live releases, Gutenberg component blocks, and liquid engineering prototypes.</div>
                  <span class="c8-tool2-link">Visit playground →</span>
                </div>
              </a>
              <a href="{rel_prefix}Case Studies/index.html" class="c8-tool2-row">
                <div class="c8-tool2-ico"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
                <div>
                  <div class="c8-tool2-name">Client Case Studies</div>
                  <div class="c8-tool2-desc">Inspect complete client transformations across hospitality and e-commerce ecosystems.</div>
                  <span class="c8-tool2-link">View case studies →</span>
                </div>
              </a>
            </div>
          </div>

          <div class="c8-mcol-deco">
            <div class="c8-mcol-eyebrow">// TOOLS</div>
            <div class="c8-deco-grid">
              <span class="c8-deco-tok">est</span><span class="c8-deco-tok c8-deco-hi">v2.4</span><span class="c8-deco-tok">01</span>
              <span class="c8-deco-tok">js</span><span class="c8-deco-tok">php</span><span class="c8-deco-tok c8-deco-hi2">{{ }}</span>
              <span class="c8-deco-tok">api</span><span class="c8-deco-tok">0x1F</span><span class="c8-deco-tok">02</span>
              <span class="c8-deco-tok c8-deco-hi">poc</span><span class="c8-deco-tok">rc1</span><span class="c8-deco-tok">gtb</span>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- ── Mobile Drawer ── -->
    <div class="c8-md-overlay" id="c8-md-overlay"></div>
    <div class="c8-md-drawer" id="c8-md-drawer">

      <div class="c8-md-hero">
        <div class="c8-md-hero-bar">
          <img src="https://cr8vstacks.com/wp-content/uploads/2022/08/1.png" alt="CR8V Stacks" class="c8-md-hero-logo-img">
          <button class="c8-md-close" id="c8-md-close" type="button" aria-label="Close menu">
            <svg viewBox="0 0 24 24" fill="none" stroke="#FAFAF7" stroke-width="1.75" style="display:block;width:13px;height:13px;stroke:#FAFAF7;"><path d="M18 6L6 18M6 6l12 12"/></svg>
          </button>
        </div>
        <div class="c8-md-hero-label">Strategy, Design &amp; Liquid Performance</div>
      </div>

      <div class="c8-md-body">
        <div class="c8-md-section-label">Core Services</div>
        <div class="c8-md-grid">
          <a href="{rel_prefix}Web Design Service Page/index.html" class="c8-md-card">
            <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
            <div class="c8-md-card-name">Website Design</div>
          </a>
          <a href="{rel_prefix}Custom Dev Service Page/index.html" class="c8-md-card">
            <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg></div>
            <div class="c8-md-card-name">Custom Dev</div>
          </a>
          <a href="{rel_prefix}E-Commerce Service Page/index.html" class="c8-md-card">
            <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div>
            <div class="c8-md-card-name">E-Commerce</div>
          </a>
          <a href="{rel_prefix}Shopify Service Page/index.html" class="c8-md-card">
            <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0"/></svg></div>
            <div class="c8-md-card-name">Shopify</div>
          </a>
          <a href="{rel_prefix}WooCommerce Service Page/index.html" class="c8-md-card">
            <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/></svg></div>
            <div class="c8-md-card-name">WooCommerce</div>
          </a>
          <a href="{rel_prefix}WordPress Service Page/index.html" class="c8-md-card">
            <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 00-7.07 17.07l4.07-11.07h6l4.07 11.07A10 10 0 0012 2z"/></svg></div>
            <div class="c8-md-card-name">WordPress</div>
          </a>
        </div>

        <div class="c8-md-plain-links">
          <a href="{rel_prefix}home2.html" class="c8-md-plain-link">Home <span>→</span></a>
          <a href="{rel_prefix}Case Studies/index.html" class="c8-md-plain-link">Case Studies <span>→</span></a>
          <a href="{rel_prefix}discovery-call.html" class="c8-md-plain-link">Scope Estimator <span>→</span></a>
          <a href="{rel_prefix}home2.html#dev-playground" class="c8-md-plain-link">Dev Playground <span>→</span></a>
          <a href="{rel_prefix}blog.html" class="c8-md-plain-link">Blog <span>→</span></a>
        </div>
      </div>

      <div class="c8-md-foot">
        <a href="{rel_prefix}discovery-call.html" class="c8-md-cta">Get an Estimate →</a>
      </div>
    </div>

    <script>
    (function(){{
      var header = document.getElementById('c8-header');
      var back = document.getElementById('c8-mega-back');
      var active = null, timer = null;

      function open(id){{
        clearTimeout(timer);
        var panel = document.getElementById(id);
        if (!panel) return;
        if (active && active !== panel){{
          active.classList.remove('c8-open');
          document.querySelectorAll('#c8-pnav .c8-pnav-link').forEach(function(l){{ l.classList.remove('c8-open'); }});
        }}
        panel.classList.add('c8-open');
        if (back) back.classList.add('c8-show');
        active = panel;
        document.querySelectorAll('[data-mega="'+id+'"] .c8-pnav-link').forEach(function(l){{ l.classList.add('c8-open'); }});
      }}
      function close(immediate){{
        clearTimeout(timer);
        var fn = function(){{
          if (active){{ active.classList.remove('c8-open'); active = null; }}
          if (back) back.classList.remove('c8-show');
          document.querySelectorAll('#c8-pnav .c8-pnav-link').forEach(function(l){{ l.classList.remove('c8-open'); }});
        }};
        if (immediate) fn(); else timer = setTimeout(fn, 180);
      }}

      document.querySelectorAll('#c8-pnav .c8-pnav-item[data-mega]').forEach(function(item){{
        var link = item.querySelector('.c8-pnav-link');
        var id = item.getAttribute('data-mega');
        link.addEventListener('mouseenter', function(){{ open(id); }});
        link.addEventListener('click', function(e){{
          if (active && active.id === id) close(true); else open(id);
        }});
        item.addEventListener('mouseleave', function(){{ close(false); }});
      }});
      document.querySelectorAll('#c8-mega-services, #c8-mega-toolkits').forEach(function(p){{
        p.addEventListener('mouseenter', function(){{ clearTimeout(timer); }});
        p.addEventListener('mouseleave', function(){{ close(false); }});
      }});
      if (back) back.addEventListener('click', function(){{ close(true); }});
      document.addEventListener('keydown', function(e){{ if (e.key === 'Escape') close(true); }});

      if (header) {{
        window.addEventListener('scroll', function(){{
          header.classList.toggle('c8-scrolled', window.scrollY > 8);
        }});
      }}

      var hbg = document.getElementById('c8-hbg');
      var drawer = document.getElementById('c8-md-drawer');
      var overlay = document.getElementById('c8-md-overlay');
      var closeBtn = document.getElementById('c8-md-close');

      function toggleDrawer(){{
        var isOpen = drawer.classList.toggle('c8-open');
        overlay.classList.toggle('c8-show', isOpen);
        hbg.classList.toggle('c8-open', isOpen);
      }}
      if (hbg && drawer && overlay && closeBtn) {{
        hbg.addEventListener('click', toggleDrawer);
        closeBtn.addEventListener('click', toggleDrawer);
        overlay.addEventListener('click', toggleDrawer);
        document.addEventListener('keydown', function(e){{
          if (e.key === 'Escape' && drawer.classList.contains('c8-open')) toggleDrawer();
        }});
      }}
    }})();
    </script>
  </div>
  """
    return h

def get_footer_html(rel_prefix):
    f = f"""
  <!-- MASTER MODERNIZED AGENCY FOOTER -->
  <div class="c8ft-root">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap');

    .c8ft-root {{
      --c8ft-black: #080808;
      --c8ft-white: #FAFAF7;
      --c8ft-off:   #EFEEE8;
      --c8ft-blue:  #0047E1;
      --c8ft-blue-mid: #0038C0;
      --c8ft-blue-hi:  #4A9EFF;
      --c8ft-gray:  #8A8A8A;
      font-family: 'DM Sans', sans-serif;
      background: var(--c8ft-black);
      overflow: hidden;
      position: relative;
    }}
    .c8ft-root *, .c8ft-root *::before, .c8ft-root *::after {{ box-sizing: border-box; margin: 0; padding: 0; }}
    :where(.c8ft-root) a {{ text-decoration: none; color: inherit; }}
    .c8ft-root ul {{ list-style: none; }}

    .c8ft-hero {{
      position: relative;
      padding: 5rem 3.5rem 6rem;
      overflow: hidden;
      border-bottom: 1px solid rgba(255,255,255,.08);
    }}
    .c8ft-hero::before {{
      content: ''; position: absolute; inset: 0;
      background: radial-gradient(circle at 20% 20%, rgba(0,71,225,.35) 0%, transparent 55%),
                  radial-gradient(circle at 85% 80%, rgba(0,56,192,.25) 0%, transparent 50%);
    }}
    .c8ft-hero-ghost {{
      position: absolute; bottom: -2.5rem; left: 3rem;
      font-family: 'Michroma', sans-serif; font-size: min(15vw, 10rem);
      line-height: .8; color: rgba(255,255,255,.03); letter-spacing: -.02em;
      pointer-events: none; z-index: 0; white-space: nowrap;
    }}
    .c8ft-hero-in {{ position: relative; z-index: 1; max-width: 1440px; margin: 0 auto; }}
    .c8ft-hero-tag {{
      font-family: 'Space Mono', monospace; font-size: 10px;
      letter-spacing: .3em; text-transform: uppercase; color: var(--c8ft-blue-hi);
      margin-bottom: 1.25rem; display: flex; align-items: center; gap: 10px;
    }}
    .c8ft-hero-tag::before {{ content: ''; width: 20px; height: 1px; background: var(--c8ft-blue-hi); }}
    .c8ft-hero-title {{
        font-family: 'Michroma', sans-serif;
        font-size: clamp(2.5rem, 5vw, 1.8rem);
        line-height: 1.2;
        color: var(--c8ft-white);
        letter-spacing: .01em;
        max-width: 900px;
        margin-bottom: 2.25rem;
        font-weight: 700;
    }}
    .c8ft-hero-title span {{ color: var(--c8ft-blue-hi); }}

    .c8ft-hero-cta {{
      position: relative; overflow: hidden;
      display: inline-flex; align-items: center; gap: 10px;
      height: 52px; padding: 0 2rem; background: var(--c8ft-blue);
      color: #fff; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 600;
      border-radius: 999px; box-shadow: 0 4px 14px rgba(0, 71, 225, 0.3);
      transition: background .25s ease, transform .2s ease;
    }}
    .c8ft-hero-cta::before {{
      content: ''; position: absolute; top: 0; left: -100%;
      width: 60%; height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.35), transparent);
      transform: skewX(-20deg); transition: left 0.65s ease;
    }}
    .c8ft-hero-cta:hover {{ background: var(--c8ft-blue-mid); transform: translateY(-2px); }}
    .c8ft-hero-cta:hover::before {{ left: 180%; }}
    .c8ft-hero-cta svg {{ width: 14px; height: 14px; stroke: #fff; stroke-width: 2; fill: none; }}

    .c8ft-stack-zone {{ max-width: 1440px; margin: 0 auto; padding: 0 3.5rem; position: relative; z-index: 1; }}
    .c8ft-stack {{
      display: grid; grid-template-columns: 1.1fr 1.2fr 1fr; gap: 2.5rem;
      margin-top: -3rem; padding-bottom: 4rem; align-items: start;
    }}

    .c8ft-card {{ background: var(--c8ft-off); position: relative; padding: 2.25rem 2rem; border-radius: 4px; }}
    .c8ft-card-label {{
      font-family: 'Space Mono', monospace; font-size: 9.5px;
      letter-spacing: .28em; text-transform: uppercase; color: var(--c8ft-blue);
      margin-bottom: 1.25rem; display: flex; align-items: center; gap: 8px;
    }}
    .c8ft-card-label::before {{ content: ''; width: 14px; height: 1px; background: var(--c8ft-blue); }}

    .c8ft-site-link {{
      display: flex; align-items: center; justify-content: space-between;
      padding: 10px 0; border-bottom: 1px solid rgba(8,8,8,.08);
      font-family: 'DM Sans', sans-serif; font-size: 0.95rem; font-weight: 500;
      color: var(--c8ft-black); transition: padding-left .18s, color .18s;
    }}
    .c8ft-site-link:last-child {{ border-bottom: none; }}
    .c8ft-site-link:hover {{ padding-left: 6px; color: var(--c8ft-blue); }}
    .c8ft-site-link-arr {{ font-size: .9rem; opacity: .4; transition: opacity .18s, transform .18s; }}
    .c8ft-site-link:hover .c8ft-site-link-arr {{ opacity: 1; transform: translateX(4px); color: var(--c8ft-blue); }}

    .c8ft-chip-cluster {{ display: flex; flex-wrap: wrap; gap: .55rem; margin-bottom: 1.25rem; }}
    .c8ft-chip {{
      display: inline-flex; align-items: center; gap: 6px; padding: 8px 12px;
      background: var(--c8ft-white); border: 1px solid rgba(8,8,8,.1);
      font-size: 12px; font-weight: 500; color: var(--c8ft-black);
      border-radius: 3px; transition: background .18s, border-color .18s, color .18s, transform .18s;
    }}
    .c8ft-chip:hover {{ background: var(--c8ft-blue); border-color: var(--c8ft-blue); color: #fff; transform: translateY(-1px); }}
    .c8ft-card-note {{ font-size: 12px; color: var(--c8ft-gray); font-weight: 300; line-height: 1.6; }}
    .c8ft-card-note a {{ color: var(--c8ft-blue); font-weight: 500; }}
    .c8ft-card-note a:hover {{ text-decoration: underline; }}

    .c8ft-touch-row {{ display: flex; flex-direction: column; gap: .9rem; margin-bottom: 1.5rem; }}
    .c8ft-touch-item {{ display: flex; align-items: flex-start; gap: 10px; font-size: 13px; color: var(--c8ft-black); }}
    .c8ft-touch-item strong {{ display: block; font-family: 'Space Mono', monospace; font-size: 9px; letter-spacing: .15em; text-transform: uppercase; color: var(--c8ft-gray); font-weight: 500; margin-bottom: 2px; }}
    .c8ft-touch-icon {{ width: 28px; height: 28px; background: var(--c8ft-white); border: 1px solid rgba(8,8,8,.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; border-radius: 3px; }}
    .c8ft-touch-icon svg {{ width: 12px; height: 12px; stroke: var(--c8ft-blue); stroke-width: 1.8; fill: none; }}

    .c8ft-social-row {{ display: flex; gap: .6rem; }}
    .c8ft-social {{
      width: 36px; height: 36px; background: var(--c8ft-black);
      display: flex; align-items: center; justify-content: center; border-radius: 3px;
      transition: background .18s, transform .18s;
    }}
    .c8ft-social:hover {{ background: var(--c8ft-blue); transform: translateY(-2px); }}
    .c8ft-social svg {{ width: 15px; height: 15px; stroke: #fff; fill: none; stroke-width: 1.6; }}

    .c8ft-cap {{ border-top: 1px solid rgba(255,255,255,.08); padding: 1.25rem 3.5rem; position: relative; z-index: 1; }}
    .c8ft-cap-in {{ max-width: 1440px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; gap: 1rem; flex-wrap: wrap; }}
    .c8ft-cap-copy {{ font-family: 'Space Mono', monospace; font-size: 10px; letter-spacing: .05em; color: rgba(255,255,255,.4); }}
    .c8ft-cap-copy span {{ color: var(--c8ft-blue-hi); }}
    .c8ft-totop {{ display: flex; align-items: center; gap: 8px; font-family: 'Space Mono', monospace; font-size: 9px; letter-spacing: .2em; text-transform: uppercase; color: rgba(255,255,255,.5); transition: color .18s; cursor: pointer; }}
    .c8ft-totop:hover {{ color: #fff; }}
    .c8ft-totop-icon {{ width: 26px; height: 26px; border: 1px solid rgba(255,255,255,.18); display: flex; align-items: center; justify-content: center; transition: border-color .18s, transform .18s; border-radius: 2px; }}
    .c8ft-totop:hover .c8ft-totop-icon {{ border-color: #fff; transform: translateY(-2px); }}
    .c8ft-totop-icon svg {{ width: 11px; height: 11px; stroke: #fff; stroke-width: 2; fill: none; }}

    @media (max-width: 1024px) {{
      .c8ft-hero {{ padding: 4rem 2rem 5.5rem; }}
      .c8ft-stack-zone {{ padding: 0 2rem; }}
      .c8ft-stack {{ grid-template-columns: 1fr 1fr; gap: 2rem; }}
      .c8ft-card:last-child {{ grid-column: 1/-1; }}
    }}
    @media (max-width: 768px) {{
      .c8ft-hero {{ padding: 3.5rem 1.25rem 4.5rem; }}
      .c8ft-hero-title {{ font-size: clamp(1.8rem, 8vw, 2.5rem); }}
      .c8ft-stack-zone {{ padding: 0 1.25rem; }}
      .c8ft-stack {{ grid-template-columns: 1fr; gap: 1.75rem; margin-top: -2rem; }}
      .c8ft-cap {{ padding: 1.1rem 1.25rem; }}
      .c8ft-cap-in {{ justify-content: center; text-align: center; flex-direction: column; }}
    }}
    </style>

    <!-- ══════ HERO / CTA ══════ -->
    <div class="c8ft-hero">
      <div class="c8ft-hero-ghost">CR8V</div>
      <div class="c8ft-hero-in">
        <div class="c8ft-hero-tag">// DIGITAL AGENCY ECOSYSTEM</div>
        <div class="c8ft-hero-title">READY TO BUILD WHAT YOUR BUSINESS <span>ACTUALLY RUNS ON?</span></div>
        <a href="{rel_prefix}discovery-call.html" class="c8ft-hero-cta">
          Start Your Discovery Call
          <svg viewBox="0 0 24 24"><path d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
      </div>
    </div>

    <!-- ══════ THE STACK — THREE LAYERED CARDS ══════ -->
    <div class="c8ft-stack-zone">
      <div class="c8ft-stack">

        <!-- CARD 1: SITEMAP & CORE PAGES -->
        <div class="c8ft-card">
          <div class="c8ft-card-label">// SITEMAP</div>
          <a href="{rel_prefix}home2.html" class="c8ft-site-link">Home <span class="c8ft-site-link-arr">→</span></a>
          <a href="{rel_prefix}Main Service Page/index.html" class="c8ft-site-link">Services <span class="c8ft-site-link-arr">→</span></a>
          <a href="{rel_prefix}Case Studies/index.html" class="c8ft-site-link">Case Studies <span class="c8ft-site-link-arr">→</span></a>
          <a href="{rel_prefix}discovery-call.html" class="c8ft-site-link">Scope Estimator <span class="c8ft-site-link-arr">→</span></a>
          <a href="{rel_prefix}home2.html#dev-playground" class="c8ft-site-link">Dev Playground <span class="c8ft-site-link-arr">→</span></a>
          <a href="{rel_prefix}blog.html" class="c8ft-site-link">Blog Journal <span class="c8ft-site-link-arr">→</span></a>
        </div>

        <!-- CARD 2: 11 CORE SERVICES -->
        <div class="c8ft-card">
          <div class="c8ft-card-label">// WHAT WE DO</div>
          <div class="c8ft-chip-cluster">
            <a href="{rel_prefix}Web Design Service Page/index.html" class="c8ft-chip">Website Design</a>
            <a href="{rel_prefix}Custom Dev Service Page/index.html" class="c8ft-chip">Custom Dev</a>
            <a href="{rel_prefix}E-Commerce Service Page/index.html" class="c8ft-chip">E-Commerce</a>
            <a href="{rel_prefix}Shopify Service Page/index.html" class="c8ft-chip">Shopify</a>
            <a href="{rel_prefix}WooCommerce Service Page/index.html" class="c8ft-chip">WooCommerce</a>
            <a href="{rel_prefix}WordPress Service Page/index.html" class="c8ft-chip">WordPress</a>
            <a href="{rel_prefix}AI MVP Service Page/index.html" class="c8ft-chip">AI MVP</a>
            <a href="{rel_prefix}Brand Identity Design Service Page/index.html" class="c8ft-chip">Brand Identity</a>
            <a href="{rel_prefix}Brand Strategy Service Page/index.html" class="c8ft-chip">Brand Strategy</a>
            <a href="{rel_prefix}Digital Marketing Service Page/index.html" class="c8ft-chip">Digital Marketing</a>
            <a href="{rel_prefix}SEO and Content Service Page/index.html" class="c8ft-chip">SEO &amp; Content</a>
          </div>
          <div class="c8ft-card-note">Need a custom scope? <a href="{rel_prefix}discovery-call.html">Calculate instant estimate →</a></div>
        </div>

        <!-- CARD 3: GET IN TOUCH & FIXED YOUTUBE SVG -->
        <div class="c8ft-card">
          <div class="c8ft-card-label">// GET IN TOUCH</div>
          <div class="c8ft-touch-row">
            <div class="c8ft-touch-item">
              <div class="c8ft-touch-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/><path d="M22 6l-10 7L2 6"/></svg></div>
              <div><strong>Email</strong><a href="mailto:info@cr8vstacks.com">info@cr8vstacks.com</a></div>
            </div>
            <div class="c8ft-touch-item">
              <div class="c8ft-touch-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
              <div><strong>Phone</strong><a href="tel:+2347054963639">0705 496 3639</a></div>
            </div>
            <div class="c8ft-touch-item">
              <div class="c8ft-touch-icon"><svg viewBox="0 0 24 24"><path d="M12 21s7-6.5 7-12a7 7 0 1 0-14 0c0 5.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.4"/></svg></div>
              <div><strong>Address</strong>Ogudu, Lagos State, Nigeria</div>
            </div>
          </div>
          <div class="c8ft-social-row">
            <a href="https://www.instagram.com/cr8v_stacks" class="c8ft-social" aria-label="Instagram" target="_blank" rel="noopener"><svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
            <a href="https://www.linkedin.com/company/cr8v-stacks/" class="c8ft-social" aria-label="LinkedIn" target="_blank" rel="noopener"><svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
            <a href="https://www.youtube.com/@cr8vstacks" class="c8ft-social" aria-label="YouTube" target="_blank" rel="noopener"><svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="4"/><path d="M10 9.5v5l4.5-2.5z" fill="#FFFFFF" stroke="none"/></svg></a>
            <a href="https://www.facebook.com/cr8vstacks" class="c8ft-social" aria-label="Facebook" target="_blank" rel="noopener"><svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
          </div>
        </div>

      </div>
    </div>

    <!-- ══════ BOTTOM CAP ══════ -->
    <div class="c8ft-cap">
      <div class="c8ft-cap-in">
        <div class="c8ft-cap-copy">© <span id="c8ftYear"></span> CR8V STACKS. All rights reserved.</div>
        <div class="c8ft-totop" onclick="window.scrollTo({{top:0,behavior:'smooth'}})">
          Back to Top
          <div class="c8ft-totop-icon"><svg viewBox="0 0 24 24"><path d="M12 19V5M5 12l7-7 7 7"/></svg></div>
        </div>
      </div>
    </div>

    <script>document.getElementById('c8ftYear').textContent = new Date().getFullYear();</script>
  </div>
  """
    return f

def process_file(filepath):
    rel_path = os.path.relpath(filepath, root_dir)
    depth = rel_path.count(os.sep)
    prefix = "../" * depth

    try:
        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()

        import re

        new_header = get_header_html(prefix)
        new_footer = get_footer_html(prefix)

        # Replace Header
        if '<div class="c8hdr-root">' in content:
            start_idx = content.find('<div class="c8hdr-root">')
            end_search_str = '</script>\n</div>'
            end_idx = content.find(end_search_str, start_idx)
            if end_idx != -1:
                end_idx += len(end_search_str)
                content = content[:start_idx] + new_header.strip() + content[end_idx:]
                print(f"  Updated header in: {rel_path}")

        # Replace Footer
        if '<div class="c8ft-root">' in content:
            start_idx = content.find('<div class="c8ft-root">')
            year_script_idx = content.find("document.getElementById('c8ftYear')", start_idx)
            if year_script_idx != -1:
                end_idx = content.find('</div>', year_script_idx)
                if end_idx != -1:
                    end_idx += len('</div>')
                    end_idx = content.find('</div>', end_idx) + len('</div>')
                    content = content[:start_idx] + new_footer.strip() + content[end_idx:]
                    print(f"  Updated footer in: {rel_path}")

        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)

    except Exception as e:
        print(f"  Error processing {rel_path}: {e}")

if __name__ == "__main__":
    print("Injecting Modernized Header & Footer across agency pages...")
    html_files = glob.glob(os.path.join(root_dir, "**/*.html"), recursive=True)
    for f in html_files:
        basename = os.path.basename(f)
        if basename in ["header.html", "footer.html", "header(1).html"]:
            continue
        process_file(f)
    print("Master Header & Footer Injection Complete!")
